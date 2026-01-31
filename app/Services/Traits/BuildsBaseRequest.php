<?php

namespace App\Services\Traits;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

trait BuildsBaseRequest
{
    public function buildRequestWithToken(): PendingRequest
    {
        return Http::baseUrl($this->baseUrl)
            ->timeout(30)
            ->withToken($this->getBearerToken());
    }
}
