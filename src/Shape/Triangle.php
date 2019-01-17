<?php

namespace Delvesoft\Shape;

use Delvesoft\DesignPattern\Bridge\Platform\RendererInterface;
use Delvesoft\Shape\Point\Point;

class Triangle implements ShapeInterface
{
    /** @var Point */
    private $a;

    /** @var Point */
    private $b;

    /** @var Point */
    private $c;

    /**
     * @param Point $a
     * @param Point $b
     * @param Point $c
     */
    public function __construct(Point $a, Point $b, Point $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function draw(RendererInterface $renderer)
    {
        printf("Drawing triangle\n");
        $renderer->drawLine($this->a, $this->b);
        $renderer->drawLine($this->b, $this->c);
        $renderer->drawLine($this->c, $this->a);
        printf("----------------------------\n\n");
    }
}
