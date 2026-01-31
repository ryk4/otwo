<?php

namespace App\Actions\Quiz;

use App\Enums\QuizStatusType;
use App\Models\QuizEntry;
use Illuminate\Support\Collection;

class GetAllQuizEntriesCollectionAction
{
    public function handle(bool $includeUnpaid = false): Collection
    {
        return QuizEntry::query()
            ->with('payment')
            ->when(! $includeUnpaid, function ($query) {
                $query->whereIn('status', [QuizStatusType::PAID, QuizStatusType::BOOK_DELIVERED]);
            })
            ->select('quiz_entries.*')
            ->get();
    }
}
