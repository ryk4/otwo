<?php

namespace App\Actions\Quiz;

use App\Models\QuizEntry;

class StoreQuizInActiveSessionAction
{
    public function handle(QuizEntry $quiz): void
    {
        session()->put(QuizEntry::QUIZ_ID_SESSION, $quiz->id);
    }
}
