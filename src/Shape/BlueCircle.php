<?php
declare(strict_types=1);

namespace Delvesoft\Shape;

use Delvesoft\Drawer\DrawerInterface;
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
        //@todo
    }
}
