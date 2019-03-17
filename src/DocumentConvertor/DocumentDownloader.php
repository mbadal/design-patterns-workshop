<?php

declare(strict_types=1);

namespace Delvesoft\DocumentConvertor;

use RuntimeException;
use Delvesoft\DocumentConvertor\ValueObject\Url;
use GuzzleHttp\Client;

class DocumentDownloader
{
    /** @var Client */
    private $client;

    /**
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param Url $url
     *
     * @return string
     */
    public function downloadDocument(Url $url): string
    {
        $response = $this->client->get($url->toString());
        if ($response->getStatusCode() !== 200) {
            throw new RuntimeException("Could not download file from ulr: [{$url}]");
        }

        printf("Downloading document from: [{$url}]");
        return $response->getBody()->getContents();
    }
}