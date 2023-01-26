<?php

namespace slvler\PhoneValidation\Tests\Unit;

use slvler\PhoneValidation\PhoneValidationServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            PhoneValidationServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
    }
}
