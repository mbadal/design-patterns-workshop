<?php

declare(strict_types=1);

namespace Delvesoft\Mvc;

class ControllerA
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

        return Response::createFromScalars(200, 'first action A');
    }

    public function secondAction(): Response
    {
        if (!$this->authService->isUserAuthenticated())
        {
            return Response::createFromScalars(401, 'Not authorized');
        }

        return Response::createFromScalars(200, 'second action A');
    }
}
