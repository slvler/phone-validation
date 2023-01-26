<?php

namespace slvler\PhoneValidation\Tests\Feature;


use slvler\PhoneValidation\Phone;
use slvler\PhoneValidation\Tests\Unit\TestCase;

class PhoneTest extends TestCase
{
    public function test_getData()
    {
        $this->assertIsObject(Phone::getData('14152007986'));
    }
}
