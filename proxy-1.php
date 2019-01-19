<?php

declare(strict_types=1);

use Delvesoft\ServiceLayer\Http\SimpleClient;
use Delvesoft\ServiceLayer\ValueObject\Url;

require 'vendor/autoload.php';

function testClient(SimpleClient $client, Url $url)
{
    var_dump($client->download($url));
}

$client = new SimpleClient();
$url    = Url::createFromString('https://jsonplaceholder.typicode.com/comments');
testClient($client, $url);