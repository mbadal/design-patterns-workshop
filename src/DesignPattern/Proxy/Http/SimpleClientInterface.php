<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Proxy\Http;

use Delvesoft\ServiceLayer\ValueObject\Url;

interface SimpleClientInterface
{
    public function download(Url $endpoint): array;
}
