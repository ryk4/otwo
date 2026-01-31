<?php

namespace App\Enums;

use App\Services\Providers\Paypal\PaypalService;
use App\Services\Providers\Stripe\StripeService;

enum PaymentType: string
{
    use EnumTrait;

    case stripe = 'stripe';
    case paypal = 'paypal';

    public function title(): string
    {
        return match ($this) {
            self::stripe => 'Stripe',
            self::paypal => 'PayPal',
        };
    }

    public function providerClass(): string
    {
        return match ($this) {
            self::stripe => StripeService::class,
            self::paypal => PaypalService::class,
        };
    }
}
