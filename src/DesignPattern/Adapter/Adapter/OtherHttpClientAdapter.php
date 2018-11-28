<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Adapter\Adapter;

use Delvesoft\Client\Http\OtherHttpClient;
use Delvesoft\DesignPattern\Adapter\Client\ClientInterface;

class OtherHttpClientAdapter implements ClientInterface
{
    /** @var OtherHttpClient */
    private $client;

    /**
     * @param OtherHttpClient $client
     */
    public function __construct(OtherHttpClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $data
     * @param array $headers
     */
    public function send(array $data, array $headers)
    {
        $this->client->sendRequest($data, $headers);
    }
}