<?php

declare(strict_types=1);

use Delvesoft\DesignPattern\Proxy\CachingClientProxy;
use Delvesoft\DesignPattern\Proxy\ClientInterface;
use Delvesoft\ServiceLayer\Http\SimpleClient;
use Delvesoft\ServiceLayer\ValueObject\Url;

require 'vendor/autoload.php';

/**
 * Instrukcie:
 * - V balicku 'Delvesoft\ServiceLayer' je implemebtovana jednoducha servisna vrstva, ktora moze stahovat velke objemy dat
 * - Zabezpecte pomocou Proxy patternu, aby setrenie prostriedkov:
 *      - je nutne pripajanie sa na externy system, stahovanie a parsovanie vysledkov robit pri kazdom volani?
 *  - Podmienky:
 *      - dbajte na dependency inversion!!!
 */

function testClient(ClientInterface $client, Url $url)
{
    var_dump(count($client->download($url)));
}

$client = new SimpleClient();
$proxy = new CachingClientProxy($client);
$url    = Url::createFromString('https://jsonplaceholder.typicode.com/comments');
testClient($proxy, $url);
testClient($proxy, $url);
