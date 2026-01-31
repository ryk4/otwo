<?php

namespace App\Http\Middleware;

use App\Actions\LocaleSetting\GetLocaleInSessionAction;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HandleLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        app()->setLocale(app(GetLocaleInSessionAction::class)->handle());

        return $next($request);
    }
}
