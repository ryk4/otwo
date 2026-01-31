<?php

namespace App\Services\Providers\Facebook;

use App\Services\Providers\Facebook\Resources\EventResource;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class FacebookService
{
    protected PendingRequest $httpClient;

    public function __construct(
        private readonly string $baseUrl,
        private readonly string $bearerToken,
        private readonly string $pixelId,
    ) {
        $baseUrl = sprintf('%s/%s',$this->baseUrl, $this->pixelId);

        $this->httpClient = Http::baseUrl($baseUrl)
            ->timeout(30)
            ->withToken($this->bearerToken);
    }

    public function client(): PendingRequest
    {
        return clone $this->httpClient;
    }

    public function events(): EventResource
    {
        return new EventResource(
            client: $this->client()
        );
    }
}
