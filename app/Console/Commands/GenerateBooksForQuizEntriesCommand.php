<?php

namespace App\Console\Commands;

use App\Enums\ProductCategoryType;
use App\Enums\QuizStatusType;
use App\Jobs\GenerateBookForQuizEntryJob;
use App\Models\Product;
use App\Models\QuizEntry;
use Illuminate\Console\Command;

class GenerateBooksForQuizEntriesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'books:generate-and-send-via-email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $quizEntries = QuizEntry::query()
            ->where('status', QuizStatusType::PAID)
            ->get();

        $quizEntries->each(function (QuizEntry $quizEntry) {
            $priorityAddon = Product::query()
                ->where('category_type', ProductCategoryType::ADDON_PRIORITY)
                ->where('type', $quizEntry->payment->product->type)
                ->first();

            if ($quizEntry->additionalPayments()->where('product_id', $priorityAddon->id)->exists() && $quizEntry->updated_at < now()->subDay()) {
                GenerateBookForQuizEntryJob::dispatch($quizEntry);

                return;
            }

            if ($quizEntry->updated_at < now()->subDays(2)) {
                GenerateBookForQuizEntryJob::dispatch($quizEntry);
            }
        });
    }
}
