<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Adapter\Client;

interface ClientInterface
{
    /**
     * @param array $data
     * @param array $headers
     */
    public function send(array $data, array $headers);
}