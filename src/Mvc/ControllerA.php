<?php

declare(strict_types=1);

namespace Delvesoft\Mvc;

class ControllerA
{
    public function firstAction(): Response
    {
        return Response::createFromScalars(200, 'first action A');
    }

    public function secondAction(): Response
    {
        return Response::createFromScalars(200, 'second action A');
    }
}
