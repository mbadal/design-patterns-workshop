<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Delvesoft\Home\Remote\StandardRemote;
use Delvesoft\Home\Device\Radio;

/**
 * Instrukcie:
 * - V balicku Delvesoft\Home\Device su implementovane dva typy zariadeni
 * - V balicku Delvesoft\Home\Remote su dva typy ovladacov
 * - Pridajte:
 *      - Novy typ zariadenia - Dezove inteligentne papuce - premietaju TV vysielanie
 *      - Novy typ ovladaca, ktory podporuje aj "mutovanie zariadenia"
 *      - Novy typ ovladaca, ktory prepina po 10 kanaloch hore a 4 dole (okrem klasickeho prepinania kanalov)
 * - Podmienky:
 *      - Pridanim noveho typu zariadenia alebo ovladacov sa nesmie vytvorit viac ako jedna trieda
 *      - Kazdy typ ovladaca musi vediet ovladat kazde zariadenie
 *
 * - Vystup:
 *      --- Radio ---
 *      Toggling Radio on
 *      Setting channel on Radio to 2
 *      Setting channel on Radio to 3
 *      Setting channel on Radio to 2
 *      Setting volume on Radio to 11
 *      Setting volume on Radio to 12
 *      Setting volume on Radio to 13
 *      Toggling Radio off
 *      -------------
 */

$radioRemote = new StandardRemote(
    new Radio()
);

echo '--- Radio ---', PHP_EOL;
$radioRemote->togglePower();
$radioRemote->channelUp();
$radioRemote->channelUp();
$radioRemote->channelDown();
$radioRemote->volumeUp();
$radioRemote->volumeUp();
$radioRemote->volumeUp();
$radioRemote->togglePower();
echo '-------------', PHP_EOL;
