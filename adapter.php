<?php

declare(strict_types=1);

use Delvesoft\DesignPattern\Adapter\Sender\HttpRequestSender;

require 'vendor/autoload.php';

/**
 * Instrukcie:
 *  - v Balicku 'Delvesoft\DesignPattern\Adapter\Sender' je implementovana trieda HttpRequestSender, ktora posiela HTTP requesty
 *  - trieda sa spolieha na interface 'Delvesoft\DesignPattern\Adapter\Client\ClientInterface', ktora definuje pozadovany kontrakt pre HTTP clienta
 *  - v balicku 'Delvesoft\Client\Http\' sa nachadzaju 2 rozne "implementacie" HTTP clientov, kazda s inym API
 *  - zabezpecte, aby bola trieda HttpRequestSender schopna pouzit obe implementacie HTTP clientov
 *  - vytvorte pre kazdy HTTP klient sender, ktorym overite fungovanie riesenia
 *  - Podmienky:
 *      - nesmiete menit kontrakt ClientInterface
 *      - nesmiete menit API HTTP klientov, ide o 3rd party software (library), tym padom sa API neda zmenit priamo
 *      - gro riesenia implementuje do balicka 'Delvesoft\DesignPattern\Adapter'
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

$sender2 = new HttpRequestSender(/** @TODO */);
$sender2->performRequest($data, $headers);
