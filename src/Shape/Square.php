<?php
declare(strict_types=1);

namespace Delvesoft\Shape;

use Delvesoft\Drawer\DrawerInterface;
use Delvesoft\Shape\Color\AbstractColor;
use Delvesoft\Shape\Point\Point;

class Square extends AbstractShape
{
    private Point $point1;
    private Point $point2;
    private Point $point3;
    private Point $point4;

    public function __construct(AbstractColor $color, Point $point1, Point $point2, Point $point3, Point $point4)
    {
        $this->point1 = $point1;
        $this->point2 = $point2;
        $this->point3 = $point3;
        $this->point4 = $point4;
        parent::__construct($color);
    }

    public function draw(DrawerInterface $drawer): void
    {
        //@todo
    }
}
