<?php

namespace App\Jobs;

use App\Actions\Book\GeneratePlanAction;
use App\Models\QuizEntry;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GeneratePlanJob implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use \Illuminate\Bus\Queueable;
    use SerializesModels;

    public function __construct(
        public QuizEntry $quizEntry
    ) {
    }

    public function handle(): void
    {
        app(GeneratePlanAction::class)->handle($this->quizEntry);
    }
}
