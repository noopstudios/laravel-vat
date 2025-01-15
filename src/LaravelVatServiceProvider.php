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
        $this->mergeConfigFrom(
            __DIR__.'/../config/vat.php', 'vat'
        );

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
        $this->publishes([
            __DIR__.'/../config/vat.php' => config_path('vat.php'),
        ], 'vat-config');
    }
} 