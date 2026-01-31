<?php

namespace App\Services\Traits;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;

trait CanSendDeleteRequests
{
    public function delete(PendingRequest $request, string $url, $query = null): Response
    {
        return $request->delete($url, $query);
    }
}
