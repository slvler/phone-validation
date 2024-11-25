<?php

declare(strict_types=1);

namespace Slvler\PhoneValidation\Http;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

class Build implements BuildAdapter
{
    protected ClientInterface $http;

    protected array $options = [];

    public function __construct()
    {
        $this->http = new Client();
        $this->options = [
            'http_errors' => false,
        ];
    }

    public static function build(): self
    {
        return new static();
    }

    public function baseUrl(string $url): self
    {
        $this->options['base_uri'] = $url;

        return $this;
    }

    public function query(array $parameters): self
    {
        $this->options['query'] = $parameters;

        return $this;
    }

    public function get(string $url): HttpResponse
    {
        return $this->send('GET', $url);
    }

    protected function send(string $method, string $url): HttpResponse
    {
        $response = $this->http->request($method, $url, $this->options);

        return new HttpResponse($response);
    }
}
