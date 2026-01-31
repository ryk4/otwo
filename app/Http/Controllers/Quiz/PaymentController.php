<?php

namespace App\Http\Controllers\Quiz;

use App\Actions\Email\EmailSubscription\GetSubsriberInfoAction;
use App\Actions\Payment\GetPaymentFromUUIDAction;
use App\Actions\Payment\InitialisePaymentAction;
use App\Actions\Payment\ProcessSuccessfulPaymentAction;
use App\Actions\Product\FetchProductInfo;
use App\Actions\Quiz\FetchQuizFromActiveSessionAction;
use App\Actions\Quiz\StoreQuizInActiveSessionAction;
use App\Enums\PaymentType;
use App\Enums\ProductCategoryType;
use App\Enums\ProductType;
use App\Http\Controllers\Controller;
use App\Jobs\GeneratePlanJob;
use App\Models\LocaleSetting;
use App\Models\Product;
use App\Models\QuizEntry;
use App\Services\Interfaces\EmailSubsriptionServiceInterface;
use App\Services\Providers\Mailerlite\Classes\MailerliteSubscriberOptionalFields;
use App\Services\Providers\Stripe\StripeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class PaymentController extends Controller
{
    public function __construct(private readonly EmailSubsriptionServiceInterface $emailSubsriptionService)
    {
    }

    public function store(QuizEntry $quiz, Request $request, InitialisePaymentAction $initialisePayment)
    {
        $product = Product::query()
            ->where('type', ProductType::from($request->bookType))
            ->where('category_type', ProductCategoryType::from($request->category_type))
            ->first();

        $product = app(FetchProductInfo::class)->handle($product->id, $request->selected_locale);

        $payment = $initialisePayment->handle($quiz, $product, PaymentType::from($request->paymentType));

        $paymentUrl = '/payment/thank-you?payment_id=';

        if ($product->category_type === ProductCategoryType::MAIN_PRODUCT) {
            $paymentUrl = '/payment/success?payment_id=';
        }

        switch ($payment->type) {
            case PaymentType::stripe:
                $checkout_session = (new StripeService($payment, $product->stripe_product_id, $paymentUrl));

                return Inertia::location($checkout_session->getRedirectUrl());
            default:
                throw new \Exception('Payment type not supported');
        }
    }

    public function success(Request $request)
    {
        $payment = app(GetPaymentFromUUIDAction::class)->handle(uuid: $request->payment_id);

        if ($payment === null) {
            Log::error(sprintf('Payment not found for id: %s', $request->payment_id));

            return abort(404);
        }

        app(ProcessSuccessfulPaymentAction::class)->handle($payment);

        //fetch upsell product.
        $upsellProduct = Product::query()
            ->where('category_type', ProductCategoryType::ADDON_MEDITATION)
            ->where('is_active', true)
            ->where('type', $payment->product->type)
            ->first();

        $localeSetting = LocaleSetting::query()->firstWhere('language', $payment->quizEntry->language);

        if ($localeSetting === null) {
            Log::error(sprintf('Locale setting not gounf for quiz id : %s', $payment->quizEntry->language));
        }

        $product = app(FetchProductInfo::class)->handle($upsellProduct->id, $localeSetting->code);

        $quiz = $payment->quizEntry;

        app(StoreQuizInActiveSessionAction::class)->handle($quiz);

        if ($product === null) {
            Log::warning(sprintf('Product not found. Redirecting to thank-you page. Payment id: ', $payment->id));

            return redirect()->route('quiz.payment.thankYou', ['redirect_after_main_product_success' => true]);
        }

        return Inertia::render('Checkout/SuccessPage', compact('product', 'quiz'));
    }

    public function thankYou(Request $request)
    {
        $mainProductPurchased = (bool) $request->get('redirect_after_main_product_success') === true;

        if ($request->payment_id === null) {
            $quizEntry = app(FetchQuizFromActiveSessionAction::class)->handle();

            if ($quizEntry?->payment === null) {
                Log::warning(sprintf('Could not find quiz entry payment for quiz: %s . Trying to get using quiz_id from request.', $quizEntry?->id, $request->quiz_id));

                $quizEntry = QuizEntry::query()->firstWhere('uuid', $request->quiz_id);

                if ($quizEntry === null) {
                    Log::error('Could not quiz using UUID for thank-you page. Redirecting to home... id : %s', $quizEntry->id);

                    return redirect()->route('home');
                }
            }
        } else {
            $payment = app(GetPaymentFromUUIDAction::class)->handle(uuid: $request->payment_id);

            $quizEntry = $payment->quizEntry;

            app(ProcessSuccessfulPaymentAction::class)->handle($payment);

            $optionalFields = new MailerliteSubscriberOptionalFields;
            $optionalFields->priority = 1;

            $userId = app(GetSubsriberInfoAction::class)->handle(email: $quizEntry->email);

            if ($userId !== null) {
                $this->emailSubsriptionService->subsribers()->update(userId: $userId, optionalFields: $optionalFields);
            }
        }

        $product = app(FetchProductInfo::class)->handle($quizEntry->payment->product->id);

        $additionalProducts = $quizEntry->additionalPayments;

        $additionalProduct = null;

        if ($additionalProducts->isNotEmpty()) {
            $additionalProduct = $additionalProducts
                ->map(fn($prod) => app(FetchProductInfo::class)->handle($prod->product_id))
                ->first();
        }

        GeneratePlanJob::dispatch($quizEntry);

        $hasMeditations = !($quizEntry->meditationsUpsellUrl() === null);

        return Inertia::render('Checkout/ThankYouPage', compact('product', 'additionalProduct', 'quizEntry', 'hasMeditations', 'mainProductPurchased'));
    }
}
