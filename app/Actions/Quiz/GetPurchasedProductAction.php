<?php

namespace App\Actions\Quiz;

use App\Enums\PaymentStatusType;
use App\Enums\ProductCategoryType;
use App\Models\Payment;
use App\Models\Product;
use App\Models\QuizEntry;

class GetPurchasedProductAction
{
    public function handle(QuizEntry $quizEntry): ?Product
    {
        $mainProduct = Product::query()
            ->where('category_type', ProductCategoryType::MAIN_PRODUCT)
            ->where('type', $quizEntry->payment->product->type)
            ->first();

        $successfulPayment = Payment::query()
            ->where('quiz_entry_id', $quizEntry->id)
            ->where('status', PaymentStatusType::successful)
            ->where('product_id', $mainProduct->id)
            ->first();

        return $successfulPayment?->product;
    }
}
