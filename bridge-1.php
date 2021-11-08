<?php

declare(strict_types=1);


use Delvesoft\Shape\BlueSquare;
use Delvesoft\Shape\Point\Point;
use Delvesoft\Shape\RedCircle;
use Delvesoft\Drawer\NullDrawer;

require 'vendor/autoload.php';

/**
 * Instrukcie:
 * - upracte balicek 'Delvesoft\Shape' podla SOLID principov
 * - pridajte zelenu farbu do utvarov
 * - vytvorte triedu, ktora reprezentuje trojuholnik, ktora musi podporovat vsetky 3 farby
 * - Poznamka:
 *      - atribut farba sa pouziva len pri vykreslovani utvarov
 */

$blueSquare = new BlueSquare(
    Point::createFromCoordinates(0.0, 0.0),
    Point::createFromCoordinates(3.0, 0.0),
    Point::createFromCoordinates(3.0, 3.0),
    Point::createFromCoordinates(0.0, 3.0)
);
$blueSquare->draw(
    new NullDrawer()
);


$redCircle = new RedCircle(
    5.0,
    Point::createFromCoordinates(0.0, 0.0)
);
$redCircle->draw(
    new NullDrawer()
);
