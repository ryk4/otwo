<?php

namespace App\Http\Middleware;

use App\Actions\LocaleSetting\GetLocaleInSessionAction;
use App\Actions\LocaleSetting\GetLocaleSettingAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'auth' => [
                'user' => $request->user(),
            ],
            'locale' => app(GetLocaleInSessionAction::class)->handle() ?? config('app.locale'),
            'locale_setting' => app(GetLocaleSettingAction::class)->handle(),
            'language' => function () {
                $localeSetting = app(GetLocaleSettingAction::class)->handle()?->language->value ?? 'en';

                $langFile = lang_path($localeSetting.'.json');

                if (! File::exists($langFile)) {
                    return [];
                }

                return File::json($langFile);
            },
            'paypal' => [
                'client_id' => config('services.paypal.client_key'),
            ],
//            'ziggy' => function () use ($request) {
//                return array_merge((new Ziggy())->toArray(), [
//                    'location' => $request->url(),
//                ]);
//            },
        ]);
    }

    public function translations($json)
    {
        if (! file_exists($json)) {
            return [];
        }

        return json_decode(file_get_contents($json), true);
    }
}
