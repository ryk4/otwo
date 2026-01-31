<?php

namespace App\Actions\LocaleSetting;

use App\Models\LocaleSetting;
use Illuminate\Support\Facades\Log;

class GetLocaleSettingAction
{
    public function __construct(protected GetLocaleInSessionAction $getLocaleInSessionAction)
    {
    }

    public function handle(?string $locale = null): ?LocaleSetting
    {
        if ($locale === null) {
            $locale = $this->getLocaleInSessionAction->handle();
        }

        $localeSetting = LocaleSetting::query()
            ->firstWhere('code', $locale);

        if ($localeSetting === null) {
            Log::error(sprintf('Locale setting is null for %s', $locale));

            return null;
        }

        $localeSetting->currency_symbol = $localeSetting->currency_type->symbol();
        $localeSetting->iso_code = $localeSetting->currency_type->IsoCode();

        return $localeSetting;
    }
}
