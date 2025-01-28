<?php

namespace Noopstudios\LaravelVat\Tests;

use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    /**
     * Setup the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();
        
        // Add any additional setup code here
    }

    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
            \Noopstudios\LaravelVat\LaravelVatServiceProvider::class,
        ];
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function defineEnvironment($app): void
    {
        // Define environment setup
    }

    /**
     * This method is called after each test.
     */
    protected function tearDown(): void
    {
        // Common tear down code, e.g., releasing shared resources
        parent::tearDown();
    }

    /**
     * Example of a helper method.
     */
    protected function createSampleData()
    {
        // Code to create sample data for tests
    }
}