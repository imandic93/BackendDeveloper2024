<?php

use App\Http\Middleware\EnsureTokenIsValid;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware
            ->appendToGroup('admin', [EnsureTokenIsValid::class])
            ->alias([
                'admin-token' => EnsureTokenIsValid::class
            ]);
        $middleware->encryptCookies(except: [
                'Custom cookie',
        ]);
        $middleware->validateCsrfTokens(except: [
            'genres/*',
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
