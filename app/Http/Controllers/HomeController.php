<?php

namespace App\Http\Controllers;

use App\Actions\LocaleSetting\GetLocaleInSessionAction;
use App\Actions\LocaleSetting\SaveLocaleInSessionAction;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $localeInSession = app(GetLocaleInSessionAction::class)->handle();

        return Inertia::render('Home');
    }

    public function selectLocale(string $locale)
    {
        app(SaveLocaleInSessionAction::class)->handle($locale);

        return redirect()->route('home');
    }
}
