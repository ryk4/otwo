<?php

namespace App\Actions\Payment;

use App\Enums\PaymentStatusType;
use App\Enums\PaymentType;
use App\Models\Payment;
use App\Models\Product;
use App\Models\QuizEntry;
use Illuminate\Support\Str;

class InitialisePaymentAction
{
    public function handle(QuizEntry $quizEntry, Product $product, PaymentType $paymentType): Payment
    {
        return Payment::create([
            'uuid' => Str::uuid(),
            'quiz_entry_id' => $quizEntry->id,
            'product_id' => $product->id,
            'type' => $paymentType,
            'status' => PaymentStatusType::started,
        ]);
    }
}
