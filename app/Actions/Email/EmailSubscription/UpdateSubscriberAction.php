<?php

namespace App\Actions\Email\EmailSubscription;

use App\Services\Interfaces\EmailSubsriptionServiceInterface;
use App\Services\Providers\Mailerlite\Classes\MailerliteSubscriberOptionalFields;
use Illuminate\Support\Facades\Log;

class UpdateSubscriberAction
{
    public function __construct(
        private readonly EmailSubsriptionServiceInterface $emailSubsriptionService
    ) {}

    public function handle(string $email): bool
    {
        $optionalFields = new MailerliteSubscriberOptionalFields;
        $optionalFields->priority = 1;

        $userId = app(GetSubsriberInfoAction::class)->handle(email: $email);

        if ($userId === null) {
            Log::error("User with email $email not found in Mailerlite");

            return false;
        }

        $response = $this->emailSubsriptionService->subsribers()->update(userId: $userId, optionalFields: $optionalFields);

        return $response->noContent();
    }
}
