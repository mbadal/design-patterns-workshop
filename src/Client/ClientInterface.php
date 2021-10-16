<?php

declare(strict_types=1);

namespace Delvesoft\Client;

interface ClientInterface
{
    public function send(array $data, array $headers): void;
}
