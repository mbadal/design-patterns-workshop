<?php

declare(strict_types=1);


use Delvesoft\Shape\Square;
use Delvesoft\Shape\Point\Point;
use Delvesoft\Drawer\NullDrawer;
use Delvesoft\Shape\Circle;

require 'vendor/autoload.php';

/**
 * Instrukcie:
 * - upracte balicek 'Delvesoft\Shape' podla SOLID principov
 * - pridajte zelenu farbu do utvarov
 * - vytvorte triedu, ktora reprezentuje trojuholnik, ktora musi podporovat vsetky 3 farby
 */

$blueSquare = new Square(
    new Delvesoft\Shape\Color\BlueColor(),
    Point::createFromCoordinates(0.0, 0.0),
    Point::createFromCoordinates(3.0, 0.0),
    Point::createFromCoordinates(3.0, 3.0),
    Point::createFromCoordinates(0.0, 3.0)
);
$blueSquare->draw(
    new NullDrawer()
);


$redCircle = new Circle(
    new \Delvesoft\Shape\Color\RedColor(),
    5.0,
    Point::createFromCoordinates(0.0, 0.0)
);
$redCircle->draw(
    new NullDrawer()
);
