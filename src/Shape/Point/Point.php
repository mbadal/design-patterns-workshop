<?php

declare(strict_types=1);

namespace Delvesoft\Shape\Point;

class Point
{
    /** @var int */
    private $x = 0;

    /** @var int */
    private $y = 0;

    /**
     * @param int $x
     * @param int $y
     */
    private function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @param int $x
     * @param int $y
     *
     * @return Point
     */
    public static function createFromCoordinates(int $x, int $y): Point
    {
        return new self($x, $y);
    }

    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }
}