<?php

return [
    'env' => env('SITE_ENV', 'production'),
    'debug' => env('SITE_DEBUG', false),
    'url' => env('SITE_URL', 'http://localhost'),
    'timezone' => 'America/New_York',
    'site' => [
        'name' => env('SITE_NAME'),
    ],
    'view' => [
        'paths' => [
            realpath(base_path('resources/views')),
        ],
        'compiled' => realpath(base_path('framework/compiled')),
    ],
    'analytics' => [
        'trackingId' => env('ANALYTICS_ID'),
    ],
    'providers' => [
        /*
         * Extra, optional service providers
         */
        Illuminate\Session\SessionServiceProvider::class,
    ],
    'middleware' => [
        /*
         * Extra, optional middleware for all routes
         */
        Illuminate\Session\Middleware\StartSession::class,
    ],
    'session' => [
        'driver' => env('SESSION_DRIVER', 'file'),
        'lifetime' => 120,
        'expire_on_close' => false,
        'encrypt' => false,
        'files' => realpath(base_path('framework/sessions')),
        'lottery' => [2, 100],
        'cookie' => 'laravel_session',
        'path' => '/',
        'domain' => env('SESSION_DOMAIN', null),
        'secure' => false,
        'http_only' => true,
    ],
];
