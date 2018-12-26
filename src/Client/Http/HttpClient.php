<?php

declare(strict_types=1);

namespace Delvesoft\Client\Http;

class HttpClient
{
    /** @var array */
    private $headers = [];

    /**
     * @param array $headers
     *
     * @return $this
     */
    public function setHeaders(array $headers)
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * @param array $data
     */
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