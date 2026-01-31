<?php

namespace App\Actions\LocaleSetting;

use App\Models\LocaleSetting;
use App\Models\QuizEntry;

class LoadAndSaveLocaleFromQuizAction
{
    public function handle(QuizEntry $quizEntry): void
    {
        $localeCode = LocaleSetting::firstWhere('language', $quizEntry->language->value)?->code;

        app(SaveLocaleInSessionAction::class)->handle($localeCode);
    }
}
