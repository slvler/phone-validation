<?php

declare(strict_types=1);

namespace Slvler\PhoneValidation\Facades;

use Illuminate\Support\Facades\Facade;

class PhoneValidation extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Phone';
    }
}
