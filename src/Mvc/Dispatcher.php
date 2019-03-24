<?php

declare(strict_types=1);

namespace Delvesoft\Mvc;

use Delvesoft\Mvc\Exception\UrlNotRegisteredException;
use Delvesoft\Mvc\ValueObject\RelativeUrl;

class Dispatcher
{
    /** @var Router */
    private $router;

    /** @var array */
    private $container = [];

    /**
     * @param Router $router
     * @param array  $container
     */
    public function __construct(Router $router, array $container)
    {
        $this->router    = $router;
        $this->container = $container;
    }

    /**
     * @param RelativeUrl $url
     *
     * @return Response
     */
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