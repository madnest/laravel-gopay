<?php

namespace Madnest\LaravelGopay;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Madnest\LaravelGopay\Skeleton\SkeletonClass
 */
class LaravelGopayFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-gopay';
    }
}
