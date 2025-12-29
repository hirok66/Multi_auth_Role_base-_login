<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'seller' => \App\Http\Middleware\SellerMiddleware::class,
            'subdealer' => \App\Http\Middleware\SubdealerMiddleware::class,
            'moderator' => \App\Http\Middleware\ModeratorMiddleware::class,
            'rider' => \App\Http\Middleware\RiderMiddleware::class,
            'role' => \App\Http\Middleware\RoleMiddleware::class,
            'admin' => \App\Http\Middleware\AdminMiddleware::class,
            'editor' => \App\Http\Middleware\EditorMiddleware::class,
            'dealer' => \App\Http\Middleware\DealerMiddleware::class,
            'diller' => \App\Http\Middleware\DillerMiddleware::class,
            'customer' => \App\Http\Middleware\CustomerMiddleware::class,
            'guest' => \App\Http\Middleware\GuestMiddleware::class,

        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
