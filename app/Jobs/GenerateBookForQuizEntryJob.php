<?php

namespace App\Jobs;

use App\Actions\Book\AssociateGeneratedBookWithQuiz;
use App\Actions\Book\GeneratePlanAction;
use App\Actions\Quiz\Emails\EmailGenerateBookAction;
use App\Models\QuizEntry;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GenerateBookForQuizEntryJob implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public QuizEntry $quizEntry
    ) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $bookName = app(GeneratePlanAction::class)->handle($this->quizEntry);

        app(AssociateGeneratedBookWithQuiz::class)->handle($this->quizEntry, $bookName);

        app(EmailGenerateBookAction::class)->handle($this->quizEntry);
    }
}
