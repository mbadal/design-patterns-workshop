<?php

declare(strict_types=1);

namespace Delvesoft\Shape;

use Delvesoft\Drawer\DrawerInterface;
use Delvesoft\Shape\Color\Color;
use Delvesoft\Shape\Point\Point;

class BlueCircle implements ShapeInterface
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
        /**
         *
         * //Vsetky body kruznice
          while ($i <= 360) {
                $x = $this->centre->getX() + $this->radius * cos(deg2rad($i));
                $y = $this->centre->getY() + $this->radius * sin(deg2rad($i));
                $i++;
            }
         */

        //@todo
    }

    public function getColor(): string
    {
        return Color::COLOR_BLUE;
    }
}
