<?php

namespace App\Actions\LocaleSetting;

use App\Models\LocaleSetting;

class SaveLocaleInSessionAction
{
    public function handle(string $locale): void
    {
        session()->put(LocaleSetting::LOCALE_SETTING_CACHE, $locale);
    }
}
