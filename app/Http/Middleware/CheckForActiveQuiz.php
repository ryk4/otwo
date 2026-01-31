<?php

namespace App\Http\Middleware;

use App\Actions\Quiz\FetchQuizFromActiveSessionAction;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckForActiveQuiz
{
    public function handle(Request $request, Closure $next): Response
    {
        if (app(FetchQuizFromActiveSessionAction::class)->handle() === null) {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
