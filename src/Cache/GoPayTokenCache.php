<?php

namespace Madnest\LaravelGopay\Cache;

use GoPay\Token\AccessToken;
use GoPay\Token\TokenCache;
use Illuminate\Support\Facades\Cache;

class GoPayTokenCache implements TokenCache
{
    public function setAccessToken($client, AccessToken $token)
    {
        Cache::put('go-pay-token', serialize($token), config('laravel-gopay.cache-timeout', 30 * 60));
    }

    public function getAccessToken($client)
    {
        Cache::get('go-pay-token');
    }
}
