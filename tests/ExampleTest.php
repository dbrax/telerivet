<?php

namespace Epmnzava\Telerivet\Tests;

use Orchestra\Testbench\TestCase;
use Epmnzava\Telerivet\TelerivetServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [TelerivetServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
