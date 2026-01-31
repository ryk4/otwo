<?php

namespace App\Services\Providers\Mailerlite\Resources;

use App\Services\Providers\Mailerlite\Classes\MailerliteSubscriberOptionalFields;
use App\Services\Providers\Mailerlite\MailerliteService;
use Illuminate\Http\Client\Response;

class SubsriberResource
{
    public function __construct(
        private readonly MailerliteService $service,
    ) {}

    public function create(string $email, ?MailerliteSubscriberOptionalFields $optionalFields = null): Response
    {
        return $this->service->post(
            request: $this->service->buildRequestWithToken(),
            url: '/api/subscribers',
            payload: [
                'email' => $email,
                'fields' => $optionalFields,
            ]
        );
    }

    public function update(string $userId, ?MailerliteSubscriberOptionalFields $optionalFields = null): Response
    {
        return $this->service->put(
            request: $this->service->buildRequestWithToken(),
            url: sprintf('/api/subscribers/%s', $userId),
            payload: [
                'fields' => $optionalFields,
            ]
        );
    }

    public function getInfo(string $email): Response
    {
        return $this->service->get(
            request: $this->service->buildRequestWithToken(),
            url: "/api/subscribers/$email",
        );
    }
}
