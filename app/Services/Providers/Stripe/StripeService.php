<?php

namespace App\Services\Providers\Stripe;

use App\Actions\LocaleSetting\GetLocaleSettingAction;
use App\Services\Interfaces\PaymentInterface;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripeService implements PaymentInterface
{
    protected mixed $paymentSession;

    public function __construct(
        protected $model,
        protected string $purchasingItemId,
        protected string $paymentUrlPath
    ) {
        $this->initiatePaymentSession();
    }

    public function initiatePaymentSession(): void
    {
        Stripe::setApiKey(config('services.stripe.secret_key'));

        $this->paymentSession = Session::create([
            'line_items' => [
                [
                    'price' => $this->purchasingItemId,
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => env('APP_URL').$this->paymentUrlPath.$this->model->uuid,
            'locale' => app(GetLocaleSettingAction::class)->handle()->language->stripeLang(),
            'client_reference_id' => $this->model->uuid,
        ]);
    }

    public function getRedirectUrl(): string
    {
        return $this->paymentSession->url;
    }
}
