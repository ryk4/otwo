<?php

namespace App\Actions\Email\EmailSubscription;

use App\Models\QuizEntry;
use App\Services\Interfaces\EmailSubsriptionServiceInterface;
use App\Services\Providers\Mailerlite\Classes\MailerliteSubscriberOptionalFields;

class CreateSubscriberAction
{
    public function __construct(
        private readonly EmailSubsriptionServiceInterface $emailSubsriptionService
    ) {
    }

    public function handle(string $email, QuizEntry $quizEntry): void
    {
        $optionalFields = new MailerliteSubscriberOptionalFields;
        $optionalFields->summary_url = $quizEntry->summaryUrl();
        $optionalFields->meditations_url = $quizEntry->meditationsUpsellUrl() ?? '';
        $optionalFields->priority_url = $quizEntry->priorityUpsellUrl();
        $optionalFields->user_area_url = $quizEntry->userAreaUrl();
        $optionalFields->average_spending_amount = $quizEntry->getMoneySpentEstimates('monthly');
        $optionalFields->locale_language = $quizEntry->language->value;
        $optionalFields->priority = 0;
        $optionalFields->meditations = 0;

        $this->emailSubsriptionService->subsribers()->create(email: $email, optionalFields: $optionalFields);
    }
}
