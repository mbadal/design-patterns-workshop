<?php

declare(strict_types=1);

use Delvesoft\Sender\HttpRequestSender;

require 'vendor/autoload.php';

/**
 * Instrukcie:
 *  - v Balicku 'Delvesoft\Sender' je implementovana trieda HttpRequestSender, ktora posiela HTTP requesty
 *  - trieda sa spolieha na interface 'Delvesoft\Client\ClientInterface', ktora definuje interface, ktory chcete vo vasom kode pouzivat
 *  - dopnte kontrakt do Delvesoft\Client\ClientInterface podla pouzitia rozhrania v 'Delvesoft\Sender\HttpRequestSender'
 *  - v balicku 'Delvesoft\Client\Http\' sa nachadzaju 2 rozne "implementacie" HTTP clientov, kazda s inym API
 *  - zabezpecte, aby bola trieda HttpRequestSender schopna pouzit obe implementacie HTTP clientov
 *  - Podmienky:
 *      - nesmiete menit kontrakt ClientInterface
 *      - nesmiete menit API HTTP klientov, ide o 3rd party software (library), tym padom sa API neda zmenit priamo
 *      - gro riesenia implementuje do balicka 'Delvesoft\DesignPattern\Adapter'
 *  - Vzorovy vystup:
 *      Sending request through: [Delvesoft\Client\Http\HttpClient], with headers: [application\json] and data: [a; b]
 *      Sending request through: [Delvesoft\Client\Http\OtherHttpClient], with headers: [application\json] and data: [a; b]
 */

$data    = [
    'a' => 'a',
    'b' => 'b'
];
$headers = [
    'Content-Type' => 'application\json',
];
$sender1 = new HttpRequestSender(/** @TODO */);
$sender1->performRequest($data, $headers);
echo PHP_EOL;

$sender2 = new HttpRequestSender(/** @TODO */);
$sender2->performRequest($data, $headers);
echo PHP_EOL;
