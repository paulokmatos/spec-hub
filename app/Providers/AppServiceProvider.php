<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Gate::define('viewLogViewer', function ($user) {
            return in_array($user->email, [
                'paulo@forpoeple.io',
                'admin@forpeople.io',
            ]);
        });
    }

    public function boot(): void
    {
        Gate::define('viewPulse', function ($user) {
            return in_array($user->email, [
                'paulo@forpoeple.io',
                'admin@forpeople.io',
            ]);
        });
    }
}
