<?php

namespace App\Actions\Payment;

use App\Actions\Email\EmailSubscription\UpdateSubscriberAction;

class ProcessSuccessfulUpSellPaymentAction
{
    public function __construct(
        private readonly UpdateSubscriberAction $updateSubscriberAction
    ) {}

    public function handle(string $email): void
    {
        $this->updateSubscriberAction->handle(email: $email);
    }
}
