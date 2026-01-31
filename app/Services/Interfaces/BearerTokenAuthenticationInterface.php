<?php

namespace App\Services\Interfaces;

interface BearerTokenAuthenticationInterface
{
    public function getBearerToken(): string;
}
