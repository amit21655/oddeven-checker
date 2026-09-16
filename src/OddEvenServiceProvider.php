<?php

namespace Anay\OddEvenChecker;

use Illuminate\Support\ServiceProvider;

class OddEvenServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Bind as singleton — one shared instance across the app
        $this->app->singleton(OddEvenChecker::class, fn () => new OddEvenChecker());

        // Optional: alias for a facade / easy resolution
        $this->app->alias(OddEvenChecker::class, 'oddeven');
    }

    public function boot(): void
    {
        // Publishable config/routes/migrations would go here (none needed yet)
    }
}
