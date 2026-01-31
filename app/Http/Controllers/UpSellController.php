<?php

namespace App\Http\Controllers;

use App\Actions\LocaleSetting\LoadAndSaveLocaleFromQuizAction;
use App\Actions\Product\FetchProductInfo;
use App\Actions\Quiz\FetchQuizFromActiveSessionAction;
use App\Actions\Quiz\StoreQuizInActiveSessionAction;
use App\Enums\ProductCategoryType;
use App\Models\Product;
use App\Models\QuizEntry;
use Inertia\Inertia;

class UpSellController extends Controller
{
    public function __construct(
        private readonly LoadAndSaveLocaleFromQuizAction $loadAndSaveLocaleFromQuizAction,
        private readonly StoreQuizInActiveSessionAction $storeQuizInActiveSessionAction,
    ) {}

    public function meditationsUpsell(QuizEntry $quizEntry)
    {
        abort_if($quizEntry->payment === null, 404);

        $this->storeQuizInActiveSessionAction->handle($quizEntry);

        $this->loadAndSaveLocaleFromQuizAction->handle($quizEntry);

        //fetch upsell product.
        $upsellProduct = Product::query()
            ->where('category_type', ProductCategoryType::ADDON_MEDITATION)
            ->where('is_active', true)
            ->where('type', $quizEntry->payment->product->type)
            ->first();

        if ($upsellProduct === null) {
            $upsellProduct = Product::query()
                ->where('category_type', ProductCategoryType::ADDON_MEDITATION)
                ->where('is_active', true)
                ->first();
        }

        $product = app(FetchProductInfo::class)->handle($upsellProduct->id);

        $quiz = app(FetchQuizFromActiveSessionAction::class)->handle();

        return Inertia::render('Checkout/SuccessPage', compact('product', 'quiz'));
    }

    public function priorityUpsell(QuizEntry $quizEntry)
    {
        abort_if($quizEntry->payment === null, 404);

        $this->storeQuizInActiveSessionAction->handle($quizEntry);

        $this->loadAndSaveLocaleFromQuizAction->handle($quizEntry);

        $upsellProduct = Product::query()
            ->where('category_type', ProductCategoryType::ADDON_PRIORITY)
            ->where('is_active', true)
            ->where('type', $quizEntry->payment->product->type)
            ->first();

        if ($upsellProduct === null) {
            $upsellProduct = Product::query()
                ->where('category_type', ProductCategoryType::ADDON_PRIORITY)
                ->where('is_active', true)
                ->first();
        }

        $product = app(FetchProductInfo::class)->handle($upsellProduct->id);

        $quiz = app(FetchQuizFromActiveSessionAction::class)->handle();

        return Inertia::render('Checkout/Upsell2', compact('product', 'quiz'));
    }
}
