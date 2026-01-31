<?php

namespace App\Actions\LocaleSetting;

use App\Models\LocaleSetting;
use App\Models\QuizEntry;

class GetLocaleInSessionAction
{
    public function handle(): string
    {
        return session()->get(LocaleSetting::LOCALE_SETTING_CACHE, QuizEntry::DEFAULT_LOCALE_CODE);
    }
}
