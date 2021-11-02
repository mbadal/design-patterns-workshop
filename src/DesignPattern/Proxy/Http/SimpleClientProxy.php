<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\Proxy\Http;

use Delvesoft\ServiceLayer\ValueObject\Url;

class SimpleClientProxy implements SimpleClientInterface
{
    private SimpleClientInterface $client;
    private array $cache = [];

    public function __construct(SimpleClientInterface $client)
    {
        $this->client = $client;
    }

    public function download(Url $endpoint): array
    {
        if ($this->cache === []) {
            $this->cache = $this->client->download($endpoint);
        }

        return $this->cache;
    }
}
