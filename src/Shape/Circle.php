<?php
declare(strict_types=1);

namespace Delvesoft\Shape;

use Delvesoft\DesignPattern\Bridge\Platform\RendererInterface;
use Delvesoft\Shape\Point\Point;

class Circle implements ShapeInterface
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

    public function draw(RendererInterface $renderer)
    {
        $i     = 0;
        printf("Drawing circle: \n");
        while ($i <= 360) {
            $x = $this->centre->getX() + $this->radius * cos(deg2rad($i));
            $y = $this->centre->getY() + $this->radius * sin(deg2rad($i));
            $renderer->drawPoint(Point::createFromCoordinates($x, $y));

            $i++;
        }
        printf("----------------------------\n\n");
    }
}
