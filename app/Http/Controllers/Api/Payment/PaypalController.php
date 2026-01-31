<?php

namespace App\Http\Controllers\Api\Payment;

use App\Actions\Email\EmailSubscription\GetSubsriberInfoAction;
use App\Actions\LocaleSetting\GetLocaleSettingAction;
use App\Actions\Payment\InitialisePaymentAction;
use App\Actions\Payment\ProcessSuccessfulPaymentAction;
use App\Actions\Payment\UpdatePaymentCountryCodeAction;
use App\Actions\Payment\UpdatePaymentResponseFromSupplierAction;
use App\Actions\Product\FetchProductInfo;
use App\Actions\Quiz\FetchQuizInfoUsingUUID;
use App\Enums\PaymentType;
use App\Enums\ProductCategoryType;
use App\Http\Controllers\Controller;
use App\Services\Interfaces\EmailSubsriptionServiceInterface;
use App\Services\Providers\Mailerlite\Classes\MailerliteSubscriberOptionalFields;
use App\Services\Providers\Paypal\PaypalService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class PaypalController extends Controller
{
    public function __construct(private readonly EmailSubsriptionServiceInterface $emailSubsriptionService)
    {
    }

    public function checkout(Request $request)
    {
        $quiz = app(FetchQuizInfoUsingUUID::class)->handle($request->quiz);

        $product = app(FetchProductInfo::class)->handle($request->product_id, $request->selected_locale);

        $localeSetting = app(GetLocaleSettingAction::class)->handle($request->selected_locale);

        app(InitialisePaymentAction::class)->handle($quiz, $product, PaymentType::paypal);

        $orderId = app(PaypalService::class)->payments()
            ->checkout(amount: $product->price_with_discount, currency_code: $localeSetting?->currency_type->IsoCode() ?? 'USD')
            ->json()['id'];

        return response()->json([
            'data' => [
                'order_id' => $orderId,
            ],
        ]);
    }

    public function capture(string $orderId, Request $request)
    {
        $responseData = app(PaypalService::class)->payments()->capture($orderId);

        $response = json_decode($responseData);

        $payment = app(FetchQuizInfoUsingUUID::class)->handle($request->quiz)
            ->payments()
            ->where('product_id', $request->product_id)
            ->latest()
            ->first();

        $payment->update([
            'response_from_provider' => (array)$responseData,
        ]);

        if (property_exists($response, 'status') === false) {
            Log::error('Paypal response error. ' . $responseData);

            return response()->json([
                'data' => [
                    'error' => 'Paypal Capture failed',
                    'error_message' => $responseData,
                ],
            ], 500);
        }

        self::processPaymentCountryCode($payment, $response);

        app(ProcessSuccessfulPaymentAction::class)->handle($payment);

        $productCategoryType = $payment->product->category_type;

        //process mailerlite properties
        if ($productCategoryType === ProductCategoryType::ADDON_PRIORITY || $productCategoryType === ProductCategoryType::ADDON_MEDITATION) {
            $optionalFields = new MailerliteSubscriberOptionalFields;

            if ($productCategoryType === ProductCategoryType::ADDON_MEDITATION) {
                $optionalFields->meditations = 1;
            } else {
                $optionalFields->priority = 1;
            }

            $userId = app(GetSubsriberInfoAction::class)->handle(email: $payment->quizEntry->email);

            if ($userId !== null) {
                $this->emailSubsriptionService->subsribers()->update(userId: $userId, optionalFields: $optionalFields);
            }
        }

        return response()->json([
            'data' => [
                'status' => $response->status,
                'payment_uuid' => $payment->uuid,
            ],
        ]);
    }

    private function processPaymentCountryCode($payment, $response): void
    {
        try {
            $countryCode = collect($response->payment_source)->first()->address->country_code ?? null;

            if ($countryCode !== null) {
                app(UpdatePaymentCountryCodeAction::class)->handle(payment: $payment, countryCode: $countryCode);

                app(UpdatePaymentResponseFromSupplierAction::class)->handle(payment: $payment, responseFromProvider: $response);
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }
}
