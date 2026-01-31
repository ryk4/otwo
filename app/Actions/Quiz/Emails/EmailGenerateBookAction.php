<?php

namespace App\Actions\Quiz\Emails;

use App\Enums\QuizStatusType;
use App\Mail\GeneratedBookMail;
use App\Models\QuizEntry;
use Illuminate\Support\Facades\Mail;

class EmailGenerateBookAction
{
    public function handle(QuizEntry $quizEntry): void
    {
        Mail::to($quizEntry->email)->send(new GeneratedBookMail($quizEntry));

        $quizEntry->update([
            'status' => QuizStatusType::BOOK_DELIVERED,
        ]);
    }
}
