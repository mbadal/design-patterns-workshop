<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Proxy;

use Delvesoft\ServiceLayer\ValueObject\Url;

interface ClientInterface
{
    /**
     * @param Url $endpoint
     *
     * @return array
     */
    public function download(Url $endpoint): array;
}