<?php

declare(strict_types=1);

namespace Slvler\PhoneValidation\Http;

interface BuildAdapter
{
    public function get(string $url);
}
