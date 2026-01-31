<?php

namespace App\Providers;

use App\Services\Interfaces\EmailSubsriptionServiceInterface;
use App\Services\Providers\Facebook\FacebookService;
use App\Services\Providers\GoogleExcel\GoogleExcelService;
use App\Services\Providers\Mailerlite\MailerliteService;
use App\Services\Providers\Paypal\PaypalService;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public const HOME = '/dashboard';

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->singleton(
            abstract: PaypalService::class,
            concrete: fn() => new PaypalService(
                baseUrl: config('services.paypal.base_url'),
                clientKey: config('services.paypal.client_key'),
                secretKey: config('services.paypal.secret_key'),
            ),
        );

        $this->app->singleton(
            abstract: EmailSubsriptionServiceInterface::class,
            concrete: fn() => new MailerliteService(
                baseUrl: config('services.mailerlite.base_url'),
                bearerToken: config('services.mailerlite.bearer_token'),
            ),
        );

        $this->app->singleton(
            abstract: GoogleExcelService::class,
            concrete: fn() => new GoogleExcelService(
                pathToConfigFile: config_path('google-config.json'),
            ),
        );


        $this->app->singleton(
            abstract: FacebookService::class,
            concrete: fn() => new FacebookService(
                baseUrl: config('services.facebook.base_url'),
                bearerToken: config('services.facebook.bearer_token'),
                pixelId: config('services.facebook.pixel_id'),
            ),
        );


        $this->bootRoute();
    }

    public function bootRoute(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
