<?php

declare(strict_types=1);

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void {}

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Passport::enablePasswordGrant();
        Passport::loadKeysFrom(storage_path('app/private/oauth'));

        Passport::tokensExpireIn(
            Carbon::now()->addSeconds(120)
        );

        Passport::refreshTokensExpireIn(
            Carbon::now()->addDays(30)
        );
    }
}
