<?php

declare(strict_types=1);

namespace Delvesoft\Client\Http;

class HttpClient
{
    private array $headers = [];

    public function setHeaders(array $headers): self
    {
        $this->headers = $headers;

        return $this;
    }

    public function performRequest(array $data)
    {
        printf(
            "Sending request through: [%s], with headers: [%s] and data: [%s]",
            get_class($this),
            implode('; ', $this->headers),
            implode('; ', $data)
        );
    }
}
