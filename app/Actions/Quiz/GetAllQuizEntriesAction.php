<?php

namespace App\Actions\Quiz;

use App\Enums\QuizStatusType;
use App\Models\QuizEntry;
use Illuminate\Pagination\LengthAwarePaginator;

class GetAllQuizEntriesAction
{
    public function handle(bool $includeUnpaid = false): LengthAwarePaginator
    {
        return QuizEntry::query()
            ->when(! $includeUnpaid, function ($query) {
                $query->whereIn('status', [QuizStatusType::PAID, QuizStatusType::BOOK_DELIVERED]);
            })
            ->orderByDesc('created_at')
            ->paginate(20);
    }
}
