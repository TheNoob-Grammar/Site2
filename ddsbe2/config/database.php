<?php

return [
    'default' => env('DB_CONNECTION', 'mysql'),

    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', null),
            'port' => env('DB_PORT', null),
            'database' => env('DB_DATABASE', null),
            'username' => env('DB_USERNAME', null),
            'password' => env('DB_PASSWORD', null),
            'charset' => env('DB_CHARSET', 'utf8'),
            'collation' => env('DB_COLLATION', 'utf8_unicode_ci'),
            'prefix' => env('DB_PREFIX', ''),
        ],
    ],
];