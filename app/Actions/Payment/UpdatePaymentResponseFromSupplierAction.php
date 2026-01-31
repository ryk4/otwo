<?php

namespace App\Actions\Payment;

use App\Models\Payment;

class UpdatePaymentResponseFromSupplierAction
{
    public function handle(Payment $payment, $responseFromProvider): void
    {
        $payment->update([
            'response_from_provider' => (array) $responseFromProvider,
        ]);
    }
}
