<?php

declare(strict_types=1);

namespace Delvesoft\Shape;

use Delvesoft\Shape\Color\Color;
use Delvesoft\Shape\Point\Point;

abstract class AbstractShape implements ShapeInterface
{
    /**
     * @param Point $point
     * @param Color $color
     */
    protected function drawPoint(Point $point, Color $color)
    {
        printf(sprintf("Drawing point: [%s, %s] with color: [%s] \n", $point->getX(), $point->getY(), $color->getColor()));
    }

    /**
     * @param Point $start
     * @param Point $end
     * @param Color $color
     */
    protected function drawLine(Point $start, Point $end, Color $color)
    {
        printf(
            sprintf(
                "Drawing line between [%s, %s] and [%s, %s] with color: [%s]\n",
                $start->getX(),
                $start->getY(),
                $end->getX(),
                $end->getY(),
                $color->getColor()
            )
        );
    }

    /**
     * @return Color
     */
    protected abstract function getColor(): Color;
}