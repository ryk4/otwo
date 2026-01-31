<?php

namespace App\Actions\Payment;

use App\Actions\Email\EmailSubscription\AssignSubscriberToGroupAction;
use App\Actions\Email\EmailSubscription\UnassignSubscriberFromGroupAction;
use App\Actions\Invoice\GenerateNextAvailableInvoiceNumberAction;
use App\Enums\PaymentStatusType;
use App\Enums\QuizStatusType;
use App\Models\Payment;

class ProcessSuccessfulPaymentAction
{
    public function __construct(
        private readonly AssignSubscriberToGroupAction $assignSubscriberToGroupAction,
        private readonly UnassignSubscriberFromGroupAction $unassignSubscriberFromGroupAction,
        private readonly GenerateNextAvailableInvoiceNumberAction $generateNextAvailableInvoiceNumberAction
    ) {}

    public function handle(Payment $payment): void
    {
        $payment->update([
            'status' => PaymentStatusType::successful,
            'invoice_number' => $this->generateNextAvailableInvoiceNumberAction->handle(),
        ]);

        $payment->quizEntry->update([
            'status' => QuizStatusType::PAID,
        ]);

        $this->unassignSubscriberFromGroupAction->handle(groupId: config('services.mailerlite.groups.subscribed'), email: $payment->quizEntry->email);
        $this->assignSubscriberToGroupAction->handle(groupId: config('services.mailerlite.groups.purchased'), email: $payment->quizEntry->email);
    }
}
