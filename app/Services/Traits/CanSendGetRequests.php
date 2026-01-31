<?php

namespace App\Services\Traits;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;

trait CanSendGetRequests
{
    public function get(PendingRequest $request, string $url, $query = null): Response
    {
        return $request->get($url, $query);
    }
}
