<?php
declare(strict_types=1);

namespace Delvesoft\Shape;

use Delvesoft\DesignPattern\Bridge\Platform\RendererInterface;

interface ShapeInterface
{
    /**
     * @param RendererInterface $renderer
     */
    public function draw(RendererInterface $renderer);
}
