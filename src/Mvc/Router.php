<?php

declare(strict_types=1);

namespace Delvesoft\Mvc;

use Delvesoft\Mvc\Exception\UrlNotRegisteredException;
use Delvesoft\Mvc\ValueObject\ControllerAction;
use Delvesoft\Mvc\ValueObject\RelativeUrl;

class Router
{
    /** @var ControllerAction[] */
    private array $routes = [];

    public function registerRoute(RelativeUrl $url, ControllerAction $action): Router
    {
        $this->routes[$url->__toString()] = $action;

        return $this;
    }

    /**
     * @param RelativeUrl $url
     *
     * @return ControllerAction
     * @throws UrlNotRegisteredException
     */
    public function handle(RelativeUrl $url): ControllerAction
    {
        foreach ($this->routes as $route => $action) {
            if ($url->match($route)) {
                return $action;
            }
        };

        throw new UrlNotRegisteredException("No handler found for url: [{$url}]");
    }
}
