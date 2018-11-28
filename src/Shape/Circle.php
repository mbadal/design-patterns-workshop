<?php

declare(strict_types=1);

namespace Delvesoft\Shape;

use Delvesoft\Shape\Point\Point;

class Circle extends ShapeAbstract
{
    /** @var float */
    private $radius;

    /** @var Point */
    private $centre;

    /**
     * @param float $radius
     * @param Point $centre
     * @param int   $color
     */
    public function __construct(float $radius, Point $centre, int $color)
    {
        $this->radius = $radius;
        $this->centre = $centre;
        parent::__construct($color);
    }

    public function draw()
    {
        printf(
            "Drawing circle with centre: [%s , %s] and color: [%s]\n",
            $this->centre->getX(),
            $this->centre->getY(),
            $this->getColor()
        );
    }
}