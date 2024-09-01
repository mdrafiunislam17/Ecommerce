<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class CustomKernel extends HttpKernel
{
    protected $middleware = [
        // Global middleware
    ];

    protected $middlewareGroups = [
        'web' => [
            // Web middleware
        ],

        'api' => [
            // API middleware
        ],
    ];

    protected $routeMiddleware = [
        // other middleware
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
        'role' => \App\Http\Middleware\RoleManager::class,
    ];
}
