<?php

namespace App\Services\Traits;

trait ReusableBearerTokenForRequest
{
    public function getBearerToken(): string
    {
        return $this->bearerToken;
    }
}
