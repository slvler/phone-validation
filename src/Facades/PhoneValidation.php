<?php

namespace slvler\PhoneValidation\Facades;

use Illuminate\Support\Facades\Facade;

class PhoneValidation extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Phone';
    }
}
