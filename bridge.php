<?php

declare(strict_types=1);

use Delvesoft\Shape\Circle;
use Delvesoft\Shape\Square;
use Delvesoft\Shape\Point\Point;

require 'vendor/autoload.php';

/**
 * Instrukcie:
 * - vytvorte a vypiste rozne farebne prevedenia geometrickych tvarov:
 *      - cerveny = 1, zeleny = 2, modry = 3 kruh
 *      - fialovy = 5, oranzovy = 6 stvorec
 */

$color1 = 5;
$circle = new Circle(5.0, Point::createFromCoordinates(0, 5), $color1);
$circle->draw();

$square = new Square(
    Point::createFromCoordinates(0, 5),
    Point::createFromCoordinates(1, 6),
    Point::createFromCoordinates(2, 7),
    Point::createFromCoordinates(3, 8),
    10
);
$square->draw();