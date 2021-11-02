<?php

declare(strict_types=1);

use Delvesoft\ServiceLayer\Http\SimpleClient;
use Delvesoft\ServiceLayer\ValueObject\Url;

require 'vendor/autoload.php';

/**
 * Instrukcie:
 * - V balicku 'Delvesoft\ServiceLayer' je implementovana jednoducha servisna vrstva, ktora moze stahovat velke objemy dat
 * - Zabezpecte pomocou Proxy patternu setrenie prostriedkov:
 *      - je nutne pripajanie sa na externy system, stahovanie a parsovanie vysledkov robit pri kazdom volani?
 *  - Podmienky:
 *      - dbajte na dependency inversion!!!
 *  - Vzorovy vystup:
 *      Downloading data from endpoint: https://jsonplaceholder.typicode.com/comments
 *      int(500)
 *      int(500)
 */

function testClient(\Delvesoft\DesignPattern\Proxy\Http\SimpleClientInterface $client, Url $url)
{
    var_dump(count($client->download($url)));
}

$client = new SimpleClient();
$proxy = new \Delvesoft\DesignPattern\Proxy\Http\SimpleClientProxy($client);
$url    = Url::createFromString('https://jsonplaceholder.typicode.com/comments');
testClient($proxy, $url);
testClient($proxy, $url);
