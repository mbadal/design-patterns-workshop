<?php
declare(strict_types=1);

namespace Delvesoft\Shape\Point;

class Point
{
    /** @var float */
    private $x = 0.0;

    /** @var float */
    private $y = 0.0;

    /**
     * @param float $x
     * @param float $y
     */
    private function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @param float $x
     * @param float $y
     *
     * @return Point
     */
    public static function createFromCoordinates(float $x, float $y): Point
    {
        return new self($x, $y);
    }

    /**
     * @return float
     */
    public function getX(): float
    {
        return $this->x;
    }

    /**
     * @return float
     */
    public function getY(): float
    {
        return $this->y;
    }
}