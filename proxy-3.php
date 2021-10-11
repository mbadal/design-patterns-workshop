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

/**
 * Instrukcie:
 *  - v Balicku `Delvesoft\Mvc` je implementovany jednoduchy jednoduchy MVC framework
 *  - framework podporuje registraciu relativnych URL-iek a priradenie controller handlerov pre ne
 *  - obe akcie v Controller-i A vyzaduju autorizovaneho pouzivatela, v Controller-i B jedna akcia vyzaduje autorizovaneho pouzivatela, druha nie
 *  - implementujte pomocou Proxy patternu centralne overenie autorizovaneho pouzivatela
 *  - Poziadavky:
 *      - implementujte 2 proxy triedy, kazdu pre jeden controller
 *      - myslite na to, ze v oboch controlleroch moze byt viac metod
 *      - v Controller-i A predpokladajte, ze vsetky akcie vyzaduju autorizaciu
 *      - v Controller-i B predpokladajte, ze niektore akcie pozaduju autorizaciu, niektore nie
 *  - Vzorovy vystup:
 *      Response with status: [401] and content: [Not authorized]
 *      Response with status: [401] and content: [Not authorized]
 *      Response with status: [401] and content: [Not authorized]
 *      Response with status: [200] and content: [second action B]
 *
 */

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