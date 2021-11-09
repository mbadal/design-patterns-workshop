<?php

declare(strict_types=1);


namespace Delvesoft\Drawer;


use Delvesoft\Shape\Point\Point;

interface DrawerInterface
{
    public function drawLine(Point $a, Point $b, string $color): void;
    public function drawPoint(Point $a, string $color): void;
}
