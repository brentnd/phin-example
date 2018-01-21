<?php

return [
    'env' => env('SITE_ENV', 'production'),
    'debug' => env('SITE_DEBUG', false),
    'url' => env('SITE_URL', 'http://localhost'),
    'timezone' => 'America/New_York',
    'site' => [
        'name' => env('SITE_NAME'),
    ],
    'app' => [
        // For mailer which references app.name
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
        Illuminate\Mail\MailServiceProvider::class,
    ],
    'aliases' => [
        /*
         * Extra, optional facade aliases
         */
        'Mail' => Illuminate\Support\Facades\Mail::class,
    ],
    'middleware' => [
        /*
         * Extra, optional middleware for all routes
         */
        Illuminate\Session\Middleware\StartSession::class,
    ],
    'mail' => [
        "driver" => env('MAIL_DRIVER'),
        "host" => env('MAIL_HOST'),
        "port" => 2525,
        "from" => array(
          "address" => "no-reply@phin-example.com",
          "name" => "No Reply"
        ),
        "username" => env('MAIL_USERNAME'),
        "password" => env('MAIL_PASSWORD'),
        "sendmail" => "/usr/sbin/sendmail -bs",
        "pretend" => false
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
