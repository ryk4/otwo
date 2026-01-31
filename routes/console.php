<?php

use App\Console\Commands\GenerateBooksForQuizEntriesCommand;
use App\Console\Commands\SyncOrdersWithGoogleExcelCommand;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Schedule::command(SyncOrdersWithGoogleExcelCommand::class)->everyThirtyMinutes();
