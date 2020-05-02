<?php

namespace Alyael\AppTest\Tests;

use Orchestra\Testbench\TestCase;
use Alyael\AppTest\AppTestServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [AppTestServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
