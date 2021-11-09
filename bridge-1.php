<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Delvesoft\Shape\Square;
use Delvesoft\Shape\Point\Point;
use Delvesoft\Shape\Circle;
use Delvesoft\Drawer\RedDrawer;
use Delvesoft\Drawer\GreenDrawer;
use Delvesoft\Shape\Triangle;
use Delvesoft\Drawer\BlueDrawer;

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

$square = new Square(
    Point::createFromCoordinates(0.0, 0.0),
    Point::createFromCoordinates(3.0, 0.0),
    Point::createFromCoordinates(3.0, 3.0),
    Point::createFromCoordinates(0.0, 3.0)
);
$square->draw(
    new RedDrawer()
);

$triangle = new Triangle(
    Point::createFromCoordinates(0.0, 0.0),
    Point::createFromCoordinates(3.0, 0.0),
    Point::createFromCoordinates(0.0, 4.0),
);

$triangle->draw(
    new BlueDrawer()
);

$circle = new Circle(
    5.0,
    Point::createFromCoordinates(0.0, 0.0)
);
$circle->draw(
    new GreenDrawer()
);
