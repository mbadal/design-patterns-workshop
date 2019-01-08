<?php
declare(strict_types=1);

namespace Delvesoft\Shape;

use Delvesoft\Shape\Color\Color;
use Delvesoft\Shape\Point\Point;

class RedSquare extends AbstractShape
{
    /** @var Point */
    private $point1;

    /** @var Point */
    private $point2;

    /** @var Point */
    private $point3;

    /** @var Point */
    private $point4;

    /**
     * @param Point $point1
     * @param Point $point2
     * @param Point $point3
     * @param Point $point4
     */
    public function __construct(Point $point1, Point $point2, Point $point3, Point $point4)
    {
        $this->point1 = $point1;
        $this->point2 = $point2;
        $this->point3 = $point3;
        $this->point4 = $point4;
    }

    public function draw()
    {
        $color = $this->getColor();
        printf("Drawing square\n");
        $this->drawLine($this->point1, $this->point2, $color);
        $this->drawLine($this->point2, $this->point3, $color);
        $this->drawLine($this->point3, $this->point4, $color);
        $this->drawLine($this->point4, $this->point1, $color);
        printf("----------------------------\n\n");
    }

    /**
     * @return Color
     */
    protected function getColor(): Color
    {
        return Color::createFromInteger(Color::COLOR_RED);
    }
}