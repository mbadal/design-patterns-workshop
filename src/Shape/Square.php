<?php

declare(strict_types=1);

namespace Delvesoft\Shape;

use Delvesoft\Shape\Point\Point;

class Square extends ShapeAbstract
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
     * @param $color
     */
    public function __construct(Point $point1, Point $point2, Point $point3, Point $point4, int $color)
    {
        $this->point1 = $point1;
        $this->point2 = $point2;
        $this->point3 = $point3;
        $this->point4 = $point4;
        parent::__construct($color);
    }


    public function draw()
    {
        printf(
            "Drawing square with points: [%s , %s], [%s , %s], [%s , %s], [%s , %s] and color: [%s]",
            $this->point1->getX(),
            $this->point1->getY(),
            $this->point2->getX(),
            $this->point2->getY(),
            $this->point3->getX(),
            $this->point3->getY(),
            $this->point4->getX(),
            $this->point4->getY(),
            $this->getColor()
        );
    }
}