<?php

declare(strict_types=1);

use Delvesoft\Mvc\AuthService;
use Delvesoft\Mvc\ControllerA;
use Delvesoft\Mvc\ControllerB;
use Delvesoft\Mvc\Dispatcher;
use Delvesoft\Mvc\Router;
use Delvesoft\Mvc\ValueObject\ControllerAction;
use Delvesoft\Mvc\ValueObject\RelativeUrl;

require 'vendor/autoload.php';

$authService = new AuthService();
$container   = [
    ControllerA::class => new ControllerA(
        $authService
    ),
    ControllerB::class => new ControllerB(
        $authService
    )
];

$router = new Router();
$router->registerRoute(
    RelativeUrl::createFromString('/a1'),
    ControllerAction::createFromStrings(
        ControllerA::class,
        'firstAction'
    )
);
$router->registerRoute(
    RelativeUrl::createFromString('/a2'),
    ControllerAction::createFromStrings(
        ControllerA::class,
        'secondAction'
    )
);
$router->registerRoute(
    RelativeUrl::createFromString('/b1'),
    ControllerAction::createFromStrings(
        ControllerB::class,
        'firstAction'
    )
);
$router->registerRoute(
    RelativeUrl::createFromString('/b2'),
    ControllerAction::createFromStrings(
        ControllerB::class,
        'secondAction'
    )
);

$dispatcher = new Dispatcher(
    $router,
    $container
);

function testUrl(RelativeUrl $url, Dispatcher $dispatcher)
{
    echo $dispatcher->handleRequest($url) . "\n";
}

testUrl(
    RelativeUrl::createFromString('/a1'),
    $dispatcher
);
testUrl(
    RelativeUrl::createFromString('/a2'),
    $dispatcher
);
testUrl(
    RelativeUrl::createFromString('/b1'),
    $dispatcher
);
testUrl(
    RelativeUrl::createFromString('/b2'),
    $dispatcher
);