<?php

namespace App\Http\Middleware;

use App\Enums\UserRoleType;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()?->role !== UserRoleType::admin) {
            abort(403);
        }

        return $next($request);
    }
}
