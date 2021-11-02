<?php

declare(strict_types=1);

namespace Delvesoft\Mvc;

class ControllerB
{
    private AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function firstAction(): Response
    {
        if (!$this->authService->isUserAuthenticated())
        {
            return Response::createFromScalars(401, 'Not authorized');
        }

        return Response::createFromScalars(200, 'first action B');
    }

    public function secondAction(): Response
    {
        return Response::createFromScalars(200, 'second action B');
    }
}
