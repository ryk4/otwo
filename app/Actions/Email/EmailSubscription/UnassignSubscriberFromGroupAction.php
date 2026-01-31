<?php

namespace App\Actions\Email\EmailSubscription;

use App\Services\Interfaces\EmailSubsriptionServiceInterface;
use Illuminate\Support\Facades\Log;

class UnassignSubscriberFromGroupAction
{
    public function __construct(
        private readonly EmailSubsriptionServiceInterface $emailSubsriptionService
    ) {}

    public function handle(string $groupId, string $email): bool
    {
        $userId = app(GetSubsriberInfoAction::class)->handle(email: $email);

        if ($userId === null) {
            Log::error("User with email $email not found in Mailerlite");

            return false;
        }

        $response = $this->emailSubsriptionService->groups()->removeFromGroup(groupId: $groupId, userId: $userId);

        return $response->noContent();
    }
}
