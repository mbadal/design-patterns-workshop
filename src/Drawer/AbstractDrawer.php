<?php

declare(strict_types=1);


namespace Delvesoft\Drawer;


use Delvesoft\Shape\Point\Point;

abstract class AbstractDrawer implements DrawerInterface
{
    public function drawLine(Point $a, Point $b, string $color): void
    {
        echo "Printing line between point: [{$a->getX()}, {$a->getY()}] and point: [{$b->getX()}, {$b->getY()}] with color: [{$color}]";
    }

    public function drawPoint(Point $a, string $color): void
    {
        echo "Printing point: [{$a->getX()}, {$a->getY()}] with color: [{$color}]";
    }
}
