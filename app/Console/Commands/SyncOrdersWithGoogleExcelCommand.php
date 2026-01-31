<?php

namespace App\Console\Commands;

use App\Actions\Excel\SyncOrdersWithExcelSpreadsheetAction;
use Illuminate\Console\Command;

class SyncOrdersWithGoogleExcelCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quiz-entries:sync-to-google-excel';

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
        app(SyncOrdersWithExcelSpreadsheetAction::class)->handle();
    }
}
