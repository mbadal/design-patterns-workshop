<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Proxy\Mvc;

use Delvesoft\Mvc\AuthService;
use Delvesoft\Mvc\Response;

class ProxyB implements ControllerBInterface
{
    private ControllerBInterface $originalClass;
    private AuthService $authService;

    public function __construct(ControllerBInterface $originalClass, AuthService $authService)
    {
        $this->originalClass = $originalClass;
        $this->authService   = $authService;
    }

    public function firstAction(): Response
    {
        if (!$this->authService->isUserAuthenticated())
        {
            return Response::createFromScalars(401, 'Not authorized');
        }

        return $this->originalClass->firstAction();
    }

    public function secondAction(): Response
    {
        return $this->originalClass->secondAction();
    }
}
