<?php

namespace App\Console\Commands;

use App\Actions\Payment\UpdatePaymentCountryCodeAction;
use App\Enums\PaymentStatusType;
use App\Enums\PaymentType;
use App\Models\Payment;
use Illuminate\Console\Command;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class SyncStripePaymentCountryCodesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stripe:sync-payment-country-codes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        Stripe::setApiKey(config('services.stripe.secret_key'));

        $payments = Payment::query()
            ->where('status', PaymentStatusType::successful)
            ->where('type', PaymentType::stripe)
            ->whereNull('billing_country_code')
            ->latest()
            ->get();

        foreach ($payments as $payment) {
            $sessions = Session::all([
                'customer_details' => [
                    'email' => strtolower($payment->quizEntry->email),
                ],
            ]);

            if ($sessions->isEmpty()) {
                continue;
            }

            $locale = $sessions->first()->customer_details->address->country ?? null;

            if ($locale === null) {
                continue;
            }

            app(UpdatePaymentCountryCodeAction::class)->handle(payment: $payment, countryCode: $locale);
        }
    }
}
