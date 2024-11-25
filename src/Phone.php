<?php

declare(strict_types=1);

namespace Slvler\PhoneValidation;

use InvalidArgumentException;
use Slvler\PhoneValidation\Exceptions\MissingApiKey;
use Slvler\PhoneValidation\Http\Build;

class Phone extends Build
{
    public static function getData($phone)
    {
        $apiKey = config('phone.phone.api_key');

        if (empty($apiKey) || ! isset($apiKey)) {
            throw MissingApiKey::create();
        }

        $baseURL = config('phone.phone.base_url');

        if (empty($baseURL) || ! isset($baseURL)) {
            throw new InvalidArgumentException('Invalid abstractapi API base URL.');
        }

        $response = Build::build()
            ->baseUrl($baseURL)
            ->query(['api_key' => $apiKey, 'phone' => $phone])
            ->get('v1');

        return $response->toObject();
    }
}
