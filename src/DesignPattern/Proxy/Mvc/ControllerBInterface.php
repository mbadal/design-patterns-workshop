<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\Proxy\Mvc;


use Delvesoft\Mvc\Response;

interface ControllerBInterface
{
    public function firstAction(): Response;

    public function secondAction(): Response;
}
