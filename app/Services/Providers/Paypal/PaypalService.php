<?php

namespace App\Services\Providers\Paypal;

use App\Services\Interfaces\BearerTokenAuthenticationInterface;
use App\Services\Providers\Paypal\Resources\PaymentResource;
use App\Services\Traits\BuildsBaseRequest;
use App\Services\Traits\CanSendGetRequests;
use App\Services\Traits\CanSendPostRequests;

class PaypalService extends PaypalBaseService implements BearerTokenAuthenticationInterface
{
    use BuildsBaseRequest;
    use CanSendGetRequests;
    use CanSendPostRequests;

    public function __construct(
        private readonly string $baseUrl,
        private readonly string $clientKey,
        private readonly string $secretKey,
    ) {}

    public function payments(): PaymentResource
    {
        return new PaymentResource(
            service: $this
        );
    }
}
