<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Adapter;

use Delvesoft\Client\ClientInterface;
use Delvesoft\Client\Http\OtherHttpClient;

class OtherHttpClientAdapter implements ClientInterface
{
    private OtherHttpClient $client;

    public function __construct(OtherHttpClient $client)
    {
        $this->client = $client;
    }


    public function send(array $data, array $headers): void
    {
        $this->client->sendRequest($data, $headers);
    }
}
