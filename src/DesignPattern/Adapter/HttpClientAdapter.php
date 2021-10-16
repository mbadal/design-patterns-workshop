<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Adapter;

use Delvesoft\Client\ClientInterface;
use Delvesoft\Client\Http\HttpClient;

class HttpClientAdapter implements ClientInterface
{
    private HttpClient $originalObject;

    public function __construct(HttpClient $originalObject)
    {
        $this->originalObject = $originalObject;
    }

    public function send(array $data, array $headers): void
    {
        $this->originalObject
            ->setHeaders($headers)
            ->performRequest($data);
    }
}
