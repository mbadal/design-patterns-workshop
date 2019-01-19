<?php

declare(strict_types=1);

use Delvesoft\DesignPattern\Proxy\CachingClientProxy;
use Delvesoft\DesignPattern\Proxy\ClientInterface;
use Delvesoft\ServiceLayer\Http\SimpleClient;
use Delvesoft\ServiceLayer\ValueObject\Url;

require 'vendor/autoload.php';

function testClient(ClientInterface $client, Url $url)
{
    var_dump(count($client->download($url)));
}

$client = new SimpleClient();
$proxy = new CachingClientProxy($client);
$url    = Url::createFromString('https://jsonplaceholder.typicode.com/comments');
testClient($proxy, $url);
testClient($proxy, $url);