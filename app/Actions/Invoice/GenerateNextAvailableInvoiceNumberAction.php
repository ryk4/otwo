<?php

namespace App\Actions\Invoice;

use App\Enums\PaymentStatusType;
use App\Models\Payment;
use Illuminate\Support\Str;

class GenerateNextAvailableInvoiceNumberAction
{
    public function handle(): string
    {
        $invoiceNumber = Payment::query()
            ->orderByDesc('id')
            ->where('status', PaymentStatusType::successful)
            ->whereNotNull('invoice_number')
            ->first()?->invoice_number;

        if ($invoiceNumber === null) {
            $invoiceNumber = 'OTWO202400000000';
        }

        $numberCode = (int) Str::substr($invoiceNumber, -8) + 1;

        $numberCodeString = str_pad($numberCode, 8, '0', STR_PAD_LEFT);

        return sprintf('OTWO%s%s', now()->year, $numberCodeString);
    }
}
