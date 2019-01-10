<?php
declare(strict_types=1);

namespace Delvesoft\Shape;

use Delvesoft\Shape\Color\Color;
use Delvesoft\Shape\Point\Point;

class RedCircle extends AbstractShape
{
    /** @var float */
    private $radius;

    /** @var Point */
    private $centre;

    /**
     * @param float $radius
     * @param Point $centre
     */
    public function __construct(float $radius, Point $centre)
    {
        $this->radius = $radius;
        $this->centre = $centre;
    }

    public function draw()
    {
        $i     = 0;
        $color = $this->getColor();
        printf("Drawing circle: \n");
        while ($i <= 360) {
            $x = $this->centre->getX() + $this->radius * cos(deg2rad($i));
            $y = $this->centre->getY() + $this->radius * sin(deg2rad($i));
            $this->drawPoint(Point::createFromCoordinates($x, $y), $color);

            $i++;
        }
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