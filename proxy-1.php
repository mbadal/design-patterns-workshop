<?php

declare(strict_types=1);

use Delvesoft\ServiceLayer\Http\SimpleClient;
use Delvesoft\ServiceLayer\ValueObject\Url;

require 'vendor/autoload.php';

$client = new SimpleClient();
var_dump($client->download(Url::createFromString('https://jsonplaceholder.typicode.com/comments')));