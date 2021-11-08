<?php

declare(strict_types=1);


namespace Delvesoft\Shape;


use Delvesoft\Shape\Color\AbstractColor;

abstract class AbstractShape
{
    private AbstractColor $color;

    public function __construct(AbstractColor $color)
    {
        $this->color = $color;
    }

    protected function getColor(): AbstractColor
    {
        return $this->color;
    }
}
