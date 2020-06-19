<?php

namespace Madnest\LaravelGopay\Tests;

use Orchestra\Testbench\TestCase;
use Madnest\LaravelGopay\LaravelGopayServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelGopayServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
