<?php
declare(strict_types=1);

namespace Delvesoft\Shape;

use Delvesoft\DesignPattern\Bridge\Platform\RendererInterface;
use Delvesoft\Shape\Point\Point;

class Square implements ShapeInterface
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

    public function draw(RendererInterface $renderer)
    {
        printf("Drawing square\n");
        $renderer->drawLine($this->point1, $this->point2);
        $renderer->drawLine($this->point2, $this->point3);
        $renderer->drawLine($this->point3, $this->point4);
        $renderer->drawLine($this->point4, $this->point1);
        printf("----------------------------\n\n");
    }
}
