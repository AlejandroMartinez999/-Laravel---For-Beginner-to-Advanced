<?php

use App\Http\Middleware\AuthCheck;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\CheckCountry; // Ensure this middleware exists

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->use([
            App\Http\Middleware\CheckCountry::class,
        ]);

        // $middleware->group('authCheck', [
        //     App\Http\Middleware\AuthCheck::class, // Middleware añadido al grupo "web".
        // ]);

        $middleware->alias (['authCheck'=> AuthCheck::class]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
