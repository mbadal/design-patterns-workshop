<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Proxy;

use Delvesoft\Mvc\AuthService;
use Delvesoft\Mvc\ControllerB;
use Delvesoft\Mvc\Response;

class ProxyB implements ControllerBInterface
{
    /** @var ControllerB */
    private $controller;

    /** @var AuthService */
    private $authService;

    /**
     * @param ControllerB $controller
     * @param AuthService $authService
     */
    public function __construct(ControllerB $controller, AuthService $authService)
    {
        $this->controller  = $controller;
        $this->authService = $authService;
    }

    public function firstAction(): Response
    {
        if (!$this->authService->isUserAuthenticated()) {
            return Response::createFromScalars(401, 'Not authorized');
        }

        return $this->controller->firstAction();
    }

    public function secondAction(): Response
    {
        return $this->controller->secondAction();
    }
}