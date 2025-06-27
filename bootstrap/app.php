<?php

use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\indexMiddleware;
use App\Http\Middleware\PosMiddleware;
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
            "admin" => AdminMiddleware::class,
             "index" => indexMiddleware::class,
             "pos" => PosMiddleware::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
