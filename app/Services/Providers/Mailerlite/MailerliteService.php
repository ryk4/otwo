<?php

namespace App\Services\Providers\Mailerlite;

use App\Services\Interfaces\BearerTokenAuthenticationInterface;
use App\Services\Interfaces\EmailSubsriptionServiceInterface;
use App\Services\Providers\Mailerlite\Resources\GroupResource;
use App\Services\Providers\Mailerlite\Resources\SubsriberResource;
use App\Services\Traits\BuildsBaseRequest;
use App\Services\Traits\CanSendDeleteRequests;
use App\Services\Traits\CanSendGetRequests;
use App\Services\Traits\CanSendPostRequests;
use App\Services\Traits\CanSendPutRequests;
use App\Services\Traits\ReusableBearerTokenForRequest;

class MailerliteService implements BearerTokenAuthenticationInterface, EmailSubsriptionServiceInterface
{
    use BuildsBaseRequest;
    use CanSendDeleteRequests;
    use CanSendGetRequests;
    use CanSendPostRequests;
    use CanSendPutRequests;
    use ReusableBearerTokenForRequest;

    public function __construct(
        private readonly string $baseUrl,
        private readonly string $bearerToken,
    ) {}

    public function subsribers(): SubsriberResource
    {
        return new SubsriberResource(
            service: $this
        );
    }

    public function groups(): GroupResource
    {
        return new GroupResource(
            service: $this
        );
    }
}
