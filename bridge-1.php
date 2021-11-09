<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Delvesoft\Shape\BlueSquare;
use Delvesoft\Shape\Point\Point;
use Delvesoft\Drawer\NullDrawer;
use Delvesoft\Shape\RedCircle;

/**
 * Instrukcie:
 * - Pridajte zelenu farbu do utvarov
 * - Vytvorte triedu, ktora reprezentuje trojuholnik, ktora musi podporovat vsetky 3 farby
 * - Upozornenie: - atribut farba sa pouziva len pri vykreslovani utvarov, nie pri ich reprezentacii
 * - Vystup:
 *      --- Square ---
 *      Printing line between point: [X, Y] and point: [A, B] with color: [red]
 *      Printing line between point: [X, Y] and point: [A, B] with color: [red]
 *      Printing line between point: [X, Y] and point: [A, B] with color: [red]
 *      Printing line between point: [X, Y] and point: [A, B] with color: [red]
 *      ------------------
 *      --- Triangle ---
 *      Printing line between point: [X, Y] and point: [A, B] with color: [blue]
 *      Printing line between point: [X, Y] and point: [A, B] with color: [blue]
 *      Printing line between point: [X, Y] and point: [A, B] with color: [blue]
 *      ---------------------
 *      --- Circle ---
 *      Printing point: [X, Y] with color: [green]
 *      ... Vypisat vsetky body kruznice ...
 *      --------------------
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
