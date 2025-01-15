<?php

namespace Noopstudios\LaravelVat\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static bool validateFormat(string $vatNumber)
 * @method static bool validate(string $vatNumber)
 * @method static bool validateCountryCode(string $countryCode)
 */
class VatValidator extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'vat-validator';
    }
} 