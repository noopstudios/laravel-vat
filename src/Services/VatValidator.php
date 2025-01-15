<?php

namespace Noopstudios\LaravelVat\Services;

use Ibericode\Vat\Validator as IbericodeValidator;

class VatValidator
{
    protected $validator;

    /**
     * Create a new VatValidator instance.
     */
    public function __construct()
    {
        $this->validator = new IbericodeValidator();
    }

    /**
     * Validates VAT number format only
     *
     * @param string $vatNumber
     * @return bool
     */
    public function validateFormat(string $vatNumber): bool
    {
        return $this->validator->validateVatNumberFormat($vatNumber);
    }

    /**
     * Validates VAT number format and existence
     *
     * @param string $vatNumber
     * @return bool
     */
    public function validate(string $vatNumber): bool
    {
        return $this->validator->validateVatNumber($vatNumber);
    }

    /**
     * Validates country code
     *
     * @param string $countryCode
     * @return bool
     */
    public function validateCountryCode(string $countryCode): bool
    {
        return $this->validator->validateCountryCode($countryCode);
    }
} 
