<?php

namespace App\Actions\Quiz;

use App\Models\QuizEntry;

class FetchQuizInfoUsingUUID
{
    public function handle(string $uuid): ?QuizEntry
    {
        return QuizEntry::query()
            ->where('uuid', $uuid)
            ->first();
    }
}
