<?php

declare(strict_types=1);

namespace Delvesoft\ServiceLayer\Http;

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