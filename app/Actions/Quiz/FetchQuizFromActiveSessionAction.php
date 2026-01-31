<?php

namespace App\Actions\Quiz;

use App\Models\QuizEntry;

class FetchQuizFromActiveSessionAction
{
    public function handle(): ?QuizEntry
    {
        return QuizEntry::find(session()->get(QuizEntry::QUIZ_ID_SESSION));
    }
}
