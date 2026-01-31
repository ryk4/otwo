<?php

namespace App\Http\Controllers;

use App\Actions\LocaleSetting\GetLocaleSettingAction;
use App\Actions\Quiz\CreateQuizAction;
use App\Actions\Quiz\StoreQuizInActiveSessionAction;
use App\Enums\QuizType;
use Illuminate\Http\Request;
use Inertia\Inertia;

class QuizController extends Controller
{
    public function index(string $quizType)
    {
        $localeSetting = app(GetLocaleSettingAction::class)->handle()?->language->value ?? 'en';

        app()->setLocale($localeSetting);

        return Inertia::render('Quiz', [
            'quizType' => QuizType::from($quizType)->value,
            'questions' => app(QuizType::from($quizType)->questionnaireClass())->handle(),
        ]);
    }

    public function store(Request $request, CreateQuizAction $createQuizAction, StoreQuizInActiveSessionAction $storeQuizInActiveSession)
    {
        $quiz = $createQuizAction->handle($request);

        $storeQuizInActiveSession->handle($quiz);

        return redirect()->route('summary.index');
    }

    public function finalize()
    {
        return Inertia::render('QuizPages/VideoPage');
    }
}
