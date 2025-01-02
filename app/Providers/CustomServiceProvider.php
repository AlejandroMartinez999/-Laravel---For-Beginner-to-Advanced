<?php

namespace App\Providers;

use App\Services\CustomService; // Correct import for CustomService
use App\Services\CustomServices;
use Illuminate\Support\ServiceProvider;

class CustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('custom-service', function () {
            return new CustomServices();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
