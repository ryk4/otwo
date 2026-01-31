<?php

namespace App\Http\Middleware;

use App\Actions\Quiz\FetchQuizFromActiveSessionAction;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckForActiveQuiz2
{
    public function handle(Request $request, Closure $next): Response
    {
        if (app(FetchQuizFromActiveSessionAction::class)->handle() === null) {
            return redirect()->route('2.home');
        }

        return $next($request);
    }
}
