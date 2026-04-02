<?php

namespace Calcite\Icons\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Calcite\Icons\CalciteIconsServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            CalciteIconsServiceProvider::class,
        ];
    }
}