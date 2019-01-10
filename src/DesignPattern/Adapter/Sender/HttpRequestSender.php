<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Adapter\Sender;

use Delvesoft\DesignPattern\Adapter\Client\ClientInterface;

class HttpRequestSender
{
    /** @var ClientInterface */
    private $client;

    /**
     * @param ClientInterface $client
     */
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