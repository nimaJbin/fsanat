<?php

use App\Http\Middleware\EnsureActiveStaff;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->redirectGuestsTo('/admin/login');
        $middleware->redirectUsersTo(
            fn (Request $request): string => $request->user()?->isStaff() ? '/admin/dashboard' : '/',
        );
        $middleware->alias(['staff' => EnsureActiveStaff::class]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
