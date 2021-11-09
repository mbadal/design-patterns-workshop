<?php

declare(strict_types=1);

namespace Delvesoft\Shape;

use Delvesoft\Drawer\DrawerInterface;
use Delvesoft\Shape\Color\Color;
use Delvesoft\Shape\Point\Point;

class BlueSquare implements ShapeInterface
{
    private Point $point1;
    private Point $point2;
    private Point $point3;
    private Point $point4;

    public function __construct(Point $point1, Point $point2, Point $point3, Point $point4)
    {
        $this->point1 = $point1;
        $this->point2 = $point2;
        $this->point3 = $point3;
        $this->point4 = $point4;
    }

    public function draw(DrawerInterface $drawer): void
    {
        //@todo
    }

    public function getColor(): string
    {
        return Color::COLOR_BLUE;
    }
}
