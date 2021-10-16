<?php

declare(strict_types=1);

namespace Delvesoft\Sender;

use Delvesoft\Client\ClientInterface;

class HttpRequestSender
{
    private ClientInterface $client;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $data
     * @param array $headers
     */
    public function performRequest(array $data, array $headers)
    {
        $this->client->send($data, $headers);
    }
}
