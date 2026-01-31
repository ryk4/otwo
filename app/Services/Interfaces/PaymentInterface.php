<?php

namespace App\Services\Interfaces;

interface PaymentInterface
{
    public function initiatePaymentSession(): void;

    public function getRedirectUrl(): string;
}
