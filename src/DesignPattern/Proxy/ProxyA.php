<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Proxy;

use Delvesoft\Mvc\AuthService;
use Delvesoft\Mvc\ControllerA;
use Delvesoft\Mvc\Response;

class ProxyA
{
    /** @var ControllerA */
    private $controller;

    /** @var AuthService */
    private $authService;

    /**
     * @param ControllerA $controller
     * @param AuthService $authService
     */
    public function __construct(ControllerA $controller, AuthService $authService)
    {
        $this->controller  = $controller;
        $this->authService = $authService;
    }

    public function __call($name, $arguments): Response
    {
        if (!$this->authService->isUserAuthenticated())
        {
            return Response::createFromScalars(401, 'Not authorized');
        }

        return call_user_func([$this->controller, $name]);
    }
}