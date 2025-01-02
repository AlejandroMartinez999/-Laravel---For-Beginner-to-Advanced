<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CustomFacadeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('customfacade', function ($app) {
            return new \App\Services\CustomService(); // Asegúrate de que esta clase exista
        });
    }

    public function boot()
    {
        //
    }
}
