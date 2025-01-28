<?php

namespace Noopstudios\LaravelVat\Tests;

use Noopstudios\LaravelVat\Services\VatValidator;

class VatValidatorTest extends TestCase
{
    /** @test */
    public function it_validates_a_valid_vat_number()
    {
        $vatNumber = 'PT999999990'; // Valid Portuguese VAT number
        $validator = new VatValidator();
        $result = $validator->validateFormat($vatNumber);

        $this->assertTrue($result);
    }

    /** @test */
    public function it_invalidates_an_invalid_vat_number()
    {
        $vatNumber = 'PT123456789'; // Invalid Portuguese VAT number
        $validator = new VatValidator();
        $result = $validator->validate($vatNumber);

        $this->assertFalse($result);
    }

    /** @test */
    public function it_validates_format_with_wrong_check_digit()
    {
        $vatNumber = 'PT12345678910'; // Invalid Portuguese VAT number with wrong check digit
        $validator = new VatValidator();
        $result = $validator->validateFormat($vatNumber);

        $this->assertFalse($result);
    }
    
}
