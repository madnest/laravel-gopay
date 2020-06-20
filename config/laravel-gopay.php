<?php

return [
    'config' => [
        'goid' => env('GOPAY_GOID'),
        'clientId' => env('GOPAY_CLIENT_ID'),
        'clientSecret' => env('GOPAY_CLIENT_SECRET'),
        'isProductionMode' => env('GOPAY_PRODUCTION'),
        'scope' => GoPay\Definition\TokenScope::ALL,
        'language' => GoPay\Definition\Language::CZECH,
        'timeout' => 30,
        'cache' => new Madnest\LaravelGopay\Cache\GoPayTokenCache,
        'cache_timeout' => 30 * 60, // Defaults to 30 minutes
    ],

    'return_url' => env('GOPAY_RETURN_URL'),
    'notify_url' => env('GOPAY_NOTIFY_URL'),
];
