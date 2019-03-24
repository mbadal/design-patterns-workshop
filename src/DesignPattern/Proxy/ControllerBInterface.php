<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Proxy;

use Delvesoft\Mvc\Response;

interface ControllerBInterface
{
    /**
     * @return Response
     */
    public function firstAction(): Response;

    /**
     * @return Response
     */
    public function secondAction(): Response;
}