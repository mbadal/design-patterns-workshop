<?php
declare(strict_types=1);

namespace Delvesoft\Shape\Point;

class Point
{
    private float $x;
    private float $y;

    private function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public static function createFromCoordinates(float $x, float $y): Point
    {
        return new self($x, $y);
    }

    public function getX(): float
    {
        return $this->x;
    }

    public function getY(): float
    {
        return $this->y;
    }
}
