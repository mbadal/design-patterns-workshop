<?php

namespace Delvesoft\DesignPattern\Bridge\Platform;

use Delvesoft\Shape\Point\Point;

interface RendererInterface
{
    /**
     * @param Point $point
     */
    public function drawPoint(Point $point);

    /**
     * @param Point $start
     * @param Point $end
     */
    public function drawLine(Point $start, Point $end);
}
