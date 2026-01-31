<?php

namespace App\Actions\Email\EmailSubscription;

use App\Services\Interfaces\EmailSubsriptionServiceInterface;

class GetSubsriberInfoAction
{
    public function __construct(
        private readonly EmailSubsriptionServiceInterface $emailSubsriptionService
    ) {}

    public function handle(string $email): ?string
    {
        return $this->emailSubsriptionService->subsribers()->getInfo($email)->json()['data']['id'] ?? null;
    }
}
