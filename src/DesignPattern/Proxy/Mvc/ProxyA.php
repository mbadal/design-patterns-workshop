<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Proxy\Mvc;

use Delvesoft\Mvc\AuthService;
use Delvesoft\Mvc\ControllerA;
use Delvesoft\Mvc\Response;

class ProxyA
{
    private ControllerA $originalClass;
    private AuthService $authService;

    public function __construct(ControllerA $originalClass, AuthService $authService)
    {
        $this->originalClass = $originalClass;
        $this->authService   = $authService;
    }

    public function __call(string $methodName, array $arguments): Response
    {
        if (!$this->authService->isUserAuthenticated())
        {
            return Response::createFromScalars(401, 'Not authorized');
        }

        return $this->originalClass->{$methodName}($arguments);
    }
}
