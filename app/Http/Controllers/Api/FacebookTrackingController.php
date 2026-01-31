<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Providers\Facebook\FacebookService;
use Illuminate\Http\Request;

class FacebookTrackingController extends Controller
{
    public function __construct(protected FacebookService $facebookService)
    {
    }

    public function store(Request $request)
    {
        return $this->facebookService->events()->create(
            fbp: $request->get('fbp'),
            eventType: $request->get('event_type'),
            ipAddress: $request->ip(),
            userAgent: $request->header('User-Agent'),
            email: $request->get('email'),
            fbc: $request->get('fbc'),
        );
    }
}
