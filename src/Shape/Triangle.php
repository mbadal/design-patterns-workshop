<?php

declare(strict_types=1);


namespace Delvesoft\Shape;


use Delvesoft\Drawer\DrawerInterface;
use Delvesoft\Shape\Point\Point;

class Triangle implements ShapeInterface
{
    private Point $point1;
    private Point $point2;
    private Point $point3;

    public function __construct(Point $point1, Point $point2, Point $point3)
    {
        $this->point1 = $point1;
        $this->point2 = $point2;
        $this->point3 = $point3;
    }


    public function draw(DrawerInterface $drawer): void
    {
        echo '--- Triangle ---', PHP_EOL;
        $drawer->drawLine($this->point1, $this->point2);
        echo PHP_EOL;
        $drawer->drawLine($this->point2, $this->point3);
        echo PHP_EOL;
        $drawer->drawLine($this->point3, $this->point1);
        echo PHP_EOL;
        echo '--------------', PHP_EOL;
    }
}
