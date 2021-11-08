<?php
declare(strict_types=1);

namespace Delvesoft\Shape;

use Delvesoft\Drawer\DrawerInterface;
use Delvesoft\Shape\Color\AbstractColor;
use Delvesoft\Shape\Point\Point;

class Circle extends AbstractShape
{
    private float $radius;
    private Point $centre;

    public function __construct(AbstractColor $color, float $radius, Point $centre)
    {
        $this->radius = $radius;
        $this->centre = $centre;
        parent::__construct($color);
    }

    public function draw(DrawerInterface $drawer): void
    {
        //@todo
    }
}
