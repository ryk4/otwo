<?php

namespace App\Actions\Payment;

use App\Models\Payment;

class UpdatePaymentCountryCodeAction
{
    public function handle(Payment $payment, string $countryCode): void
    {
        $payment->update([
            'billing_country_code' => strtolower($countryCode),
        ]);
    }
}
