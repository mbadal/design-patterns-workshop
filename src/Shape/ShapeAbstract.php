<?php

declare(strict_types=1);

namespace Delvesoft\Shape;

abstract class ShapeAbstract implements ShapeInterface
{
    /** @var int */
    private $color;

    /**
     * @param int $color
     */
    public function __construct(int $color)
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    protected function getColor(): int
    {
        return $this->color;
    }
}