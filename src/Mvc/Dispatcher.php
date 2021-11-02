<?php

declare(strict_types=1);

namespace Delvesoft\Mvc;

use Delvesoft\Mvc\Exception\UrlNotRegisteredException;
use Delvesoft\Mvc\ValueObject\RelativeUrl;

class Dispatcher
{
    private Router $router;
    private array $container = [];

    public function __construct(Router $router, array $container)
    {
        $this->router    = $router;
        $this->container = $container;
    }

    public function handleRequest(RelativeUrl $url): Response
    {
        try {
            $action = $this->router->handle($url);

            return $action->instantiate($this->container)->call();
        } catch (UrlNotRegisteredException $e) {
            return Response::createFromScalars(
                404,
                'Not found'
            );
        }
    }
}
