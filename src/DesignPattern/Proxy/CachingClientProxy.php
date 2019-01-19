<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Proxy;

use Delvesoft\ServiceLayer\ValueObject\Url;

class CachingClientProxy implements ClientInterface
{
    /** @var ClientInterface */
    private $client;

    /** @var array */
    private $cachedResult = [];

    /**
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @param Url $endpoint
     *
     * @return array
     */
    public function download(Url $endpoint): array
    {
        if (empty($this->cachedResult)) {
            echo "Downloading from endpoint\n";
            $this->cachedResult = $this->client->download($endpoint);
        }

        return $this->cachedResult;
    }
}