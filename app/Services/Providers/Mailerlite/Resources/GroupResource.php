<?php

namespace App\Services\Providers\Mailerlite\Resources;

use App\Services\Providers\Mailerlite\MailerliteService;
use Illuminate\Http\Client\Response;

class GroupResource
{
    public function __construct(
        private readonly MailerliteService $service,
    ) {}

    public function addToGroup(string $groupId, string $userId): Response
    {
        return $this->service->post(
            request: $this->service->buildRequestWithToken(),
            url: "/api/subscribers/$userId/groups/$groupId"
        );
    }

    public function removeFromGroup(string $groupId, string $userId): Response
    {
        return $this->service->delete(
            request: $this->service->buildRequestWithToken(),
            url: "/api/subscribers/$userId/groups/$groupId"
        );
    }
}
