<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Adapter\Adapter;

use Delvesoft\Client\Http\HttpClient;
use Delvesoft\DesignPattern\Adapter\Client\ClientInterface;

class HttpClientAdapter implements ClientInterface
{
    /** @var HttpClient */
    private $client;

    /**
     * @param HttpClient $client
     */
    public function __construct(HttpClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $data
     * @param array $headers
     */
    public function send(array $data, array $headers)
    {
        $this->client->setHeaders($headers)->performRequest($data);
    }
}