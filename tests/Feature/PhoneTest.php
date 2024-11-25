<?php

namespace Slvler\PhoneValidation\Tests\Feature;


use Illuminate\Support\Facades\Config;
use Slvler\PhoneValidation\Phone;
use Slvler\PhoneValidation\Tests\Unit\TestCase;

class PhoneTest extends TestCase
{

    public function setUp(): void
    {
        parent::setUp();

        Config::set([
            'phone.phone.base_url' => 'https://phonevalidation.abstractapi.com',
            'phone.phone.api_key' => '',
        ]);
    }
    public function test_get_data()
    {
        $this->assertIsObject(Phone::getData('14152007986'));
    }
}
