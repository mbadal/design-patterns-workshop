<?php

declare(strict_types=1);


use Delvesoft\Shape\Point\Point;
use Delvesoft\Shape\Circle;
use Delvesoft\Shape\Square;
use Delvesoft\DesignPattern\Bridge\Platform\BlueRenderer;
use Delvesoft\DesignPattern\Bridge\Platform\RedRenderer;
use Delvesoft\DesignPattern\Bridge\Platform\GreenRenderer;
use Delvesoft\Shape\Triangle;

require 'vendor/autoload.php';

/**
 * Instrukcie:
 * - upracte balicek 'Delvesoft\Shape' podla SOLID principov
 * - pridajte zelenu farbu do utvarov
 * - vytvorte triedu, ktora reprezentuje trojuholnik musi podporovat vsetky 3 farby
 * - Poznamka:
 *      - atribut farba sa pouziva len pri vykreslovani utvarov
 */

$square = new Square(
    Point::createFromCoordinates(0.0, 0.0),
    Point::createFromCoordinates(3.0, 0.0),
    Point::createFromCoordinates(3.0, 3.0),
    Point::createFromCoordinates(0.0, 3.0)
);

$circle = new Circle(
    5.0,
    Point::createFromCoordinates(0.0, 0.0)
);

$triangle = new Triangle(
    Point::createFromCoordinates(0.0, 0.0),
    Point::createFromCoordinates(4.0, 0.0),
    Point::createFromCoordinates(2.0, 3.0)
);

$blueRenderer  = new BlueRenderer();
$redRenderer   = new RedRenderer();
$greenRenderer = new GreenRenderer();
$square->draw($blueRenderer);
$square->draw($redRenderer);
$square->draw($greenRenderer);

$circle->draw($blueRenderer);
$circle->draw($redRenderer);
$circle->draw($greenRenderer);

$triangle->draw($blueRenderer);
$triangle->draw($redRenderer);
$triangle->draw($greenRenderer);

