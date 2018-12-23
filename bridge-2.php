<?php

declare(strict_types=1);

use Delvesoft\Home\MutableRemote;
use Delvesoft\Home\Radio;
use Delvesoft\Home\Remote;
use Delvesoft\Home\Television;

require 'vendor/autoload.php';

/**
 * Instrukcie:
 * - implementujte riesenie do 'Delvesoft\DesignPattern\Bridge' balicka
 * - prerobte strukturu Device - Remote podla bridge pattern-u
 *      - nemente strukturu zariadeni (Television, Radio)
 * - Podmienky:
 *      - spravne identifikujte abstrakcnu a implementacnu cast
 *      - ovladac inkrementuje/dekrementuje kanal a hlasitost o 1 kanal/stupen hlasitosti
 *      - pridajte ovladac(remote), ktory podporuje metodu mute
 */

$television = new Television();
$radio      = new Radio();


$remote        = new Remote($television);
$mutableRemote = new MutableRemote($television);

$remote->channelUp();
$remote->channelDown();
var_dump($remote, $mutableRemote);
exit;
/*
 * @todo $remote = new Remote()
 * @todo $mutableRemote = new MutableRemote()
 */