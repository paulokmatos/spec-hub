<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        Gate::define('viewLogViewer', static function ($user) {
            return in_array($user->email, config('spec-services.allowed_emails.global', []), true)
                || in_array($user->email, config('spec-services.allowed_emails.log_viewer', []), true);
        });
    }

    public function boot(): void
    {
        Gate::define('viewPulse', static function ($user) {
            return in_array($user->email, config('spec-services.allowed_emails.global', []), true)
                || in_array($user->email, config('spec-services.allowed_emails.pulse', []), true);
        });
    }
}
