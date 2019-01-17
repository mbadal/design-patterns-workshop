<?php

namespace Delvesoft\DesignPattern\Bridge\Platform;

use Delvesoft\Shape\Color\Color;
use Delvesoft\Shape\Point\Point;

abstract class ColoredRendererAbstract implements RendererInterface
{
    /** @var Color */
    private $color;

    /**
     * @param Color $color
     */
    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    /**
     * @return Color
     */
    protected function getColor(): Color
    {
        return $this->color;
    }

    public function drawPoint(Point $point)
    {
        printf(sprintf("Drawing point: [%s, %s] with color: [%s] \n", $point->getX(), $point->getY(), $this->getColor()->getColor()));
    }

    public function drawLine(Point $start, Point $end)
    {
        printf(
            sprintf(
                "Drawing line between [%s, %s] and [%s, %s] with color: [%s]\n",
                $start->getX(),
                $start->getY(),
                $end->getX(),
                $end->getY(),
                $this->getColor()->getColor()
            )
        );
    }
}
