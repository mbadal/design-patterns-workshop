<?php

declare(strict_types=1);

namespace Delvesoft\ServiceLayer\Http;

use Delvesoft\ServiceLayer\ValueObject\Url;

class SimpleClient
{
    /**
     * @param Url $endpoint
     *
     * @return array
     */
    public function download(Url $endpoint): array
    {
        return json_decode(file_get_contents($endpoint->toString()), true);
    }
}