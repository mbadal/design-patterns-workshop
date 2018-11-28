<?php

declare(strict_types=1);

namespace Delvesoft\Client\Http;

class OtherHttpClient
{
    public function sendRequest(array $data, array $headers)
    {
        printf(
            "Sending request through: [%s], with headers: [%s] and data: [%s]",
            get_class($this),
            implode('; ', $headers),
            implode('; ', $data)
        );
    }
}