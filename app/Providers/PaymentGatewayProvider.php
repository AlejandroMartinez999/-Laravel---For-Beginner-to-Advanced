<?php

namespace App\Providers;

use App\Services\PaymentGateway; // Correct import for PaymentGateway
use Illuminate\Support\ServiceProvider;

class PaymentGatewayProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PaymentGateway::class, function () {
            return new PaymentGateway('dfssakkdj3424');
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
