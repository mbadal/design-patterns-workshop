<?php

declare(strict_types=1);

namespace Delvesoft\ServiceLayer\Http;

use Delvesoft\ServiceLayer\ValueObject\Url;

class SimpleClient
{
    public function download(Url $endpoint): array
    {
        echo "Downloading data from endpoint: {$endpoint}\n";
        return json_decode(file_get_contents($endpoint->toString()), true);
    }
}
