<?php

declare(strict_types=1);

namespace Delvesoft\Mvc;

use Delvesoft\DesignPattern\Proxy\Mvc\ControllerBInterface;

class ControllerB implements ControllerBInterface
{
    public function firstAction(): Response
    {
        return Response::createFromScalars(200, 'first action B');
    }

    public function secondAction(): Response
    {
        return Response::createFromScalars(200, 'second action B');
    }
}
