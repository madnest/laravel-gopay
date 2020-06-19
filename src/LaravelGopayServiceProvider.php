<?php

namespace Madnest\LaravelGopay;

use Illuminate\Support\ServiceProvider;

class LaravelGopayServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/laravel-gopay.php' => config_path('laravel-gopay.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'laravel-gopay');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-gopay', function () {
            return new LaravelGopay;
        });
    }
}
