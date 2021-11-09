<?php

declare(strict_types=1);

namespace Delvesoft\Shape;

use Delvesoft\Drawer\DrawerInterface;
use Delvesoft\Shape\Point\Point;

class Circle implements ShapeInterface
{
    private float $radius;
    private Point $centre;

    public function __construct(float $radius, Point $centre)
    {
        $this->radius = $radius;
        $this->centre = $centre;
    }

    public function draw(DrawerInterface $drawer): void
    {
        echo '--- Circle ---', PHP_EOL;
        $i = 0;
        while ($i <= 360) {
            $x = $this->centre->getX() + $this->radius * cos(deg2rad($i));
            $y = $this->centre->getY() + $this->radius * sin(deg2rad($i));

            $drawer->drawPoint(Point::createFromCoordinates($x, $y));
            echo PHP_EOL;

            $i++;
        }
        echo '--------------', PHP_EOL;
    }
}
