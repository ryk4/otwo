<?php

namespace App\Services\Traits;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;

trait CanSendPutRequests
{
    public function put(PendingRequest $request, string $url, array $payload = []): Response
    {
        return $request->put($url, $payload);
    }
}
