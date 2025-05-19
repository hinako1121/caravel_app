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
    ->withMiddleware(function (Middleware $middleware) {
        // 未ログインユーザーのリダイレクト先
        $middleware->redirectGuestsTo(function ($request) {
            return $request->is('admin*') ? route('admin.login') : route('login');
        });
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->create();
