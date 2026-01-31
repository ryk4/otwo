<?php

namespace App\Console\Commands;

use App\Actions\Invoice\GenerateNextAvailableInvoiceNumberAction;
use App\Enums\PaymentStatusType;
use App\Models\Payment;
use Illuminate\Console\Command;

class CreateInvoiceNumberForSuccessfulPaymentsCommand extends Command
{
    protected $signature = 'payments:create-invoice-numbers-for-successful-payments';

    protected $description = 'Command description';

    public function handle(): void
    {
        $payments = Payment::query()
            ->orderBy('id')
            ->where('status', PaymentStatusType::successful)
            ->get();

        foreach ($payments as $payment) {
            $invoiceNumber = app(GenerateNextAvailableInvoiceNumberAction::class)->handle();

            $payment->update([
                'invoice_number' => $invoiceNumber,
            ]);
        }
    }
}
