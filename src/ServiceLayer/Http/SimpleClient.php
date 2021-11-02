<?php

declare(strict_types=1);

namespace Delvesoft\ServiceLayer\Http;

use Delvesoft\DesignPattern\Proxy\Http\SimpleClientInterface;
use Delvesoft\ServiceLayer\ValueObject\Url;

class SimpleClient implements SimpleClientInterface
{
    public function download(Url $endpoint): array
    {
        echo "Downloading data from endpoint: {$endpoint}\n";
        return json_decode(file_get_contents($endpoint->toString()), true);
    }
}
