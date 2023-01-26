<?php

namespace slvler\PhoneValidation;

use slvler\PhoneValidation\Http\Build;

class Phone extends Build
{
    public static function getData($phone)
    {
        $response = Build::build()
            ->baseUrl(config('phone.phone.base_url'))
            ->query(['api_key' => config('phone.phone.api_key'), 'phone' => $phone])
            ->get('v1');
        return $response->toObject();
    }
}
