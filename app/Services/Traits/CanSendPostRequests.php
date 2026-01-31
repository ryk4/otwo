<?php

namespace App\Services\Traits;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;

trait CanSendPostRequests
{
    public function post(PendingRequest $request, string $url, array $payload = []): Response
    {
        return $request->post($url, $payload);
    }
}
