<?php

namespace Noopstudios\LaravelVat;

use Illuminate\Support\ServiceProvider;
use Noopstudios\LaravelVat\Services\VatValidator;

class LaravelVatServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Register the VatValidator service
        $this->app->bind('vat-validator', function ($app) {
            return new VatValidator();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Empty method as we don't need to publish any configs
    }
} 