<?php

declare(strict_types=1);

namespace Delvesoft\Shape\Color;

class Color
{
    const COLOR_RED    = 1;
    const COLOR_BLUE   = 2;
    const COLOR_GREEN  = 3;
    const COLOR_PURPLE = 4;
    const COLOR_BLACK  = 5;

    const COLOR_STRINGS = [
        self::COLOR_RED    => 'red',
        self::COLOR_BLUE   => 'blue',
        self::COLOR_GREEN  => 'green',
        self::COLOR_PURPLE => 'purple',
        self::COLOR_BLACK  => 'black',
    ];

    /** @var int */
    private $colorCode;

    /**
     * @param int $colorCode
     */
    private function __construct(int $colorCode)
    {
        $this->colorCode = $colorCode;
    }

    /**
     * @param int $colorCode
     *
     * @return Color
     */
    public static function createFromInteger(int $colorCode): Color
    {
        if (!isset(static::COLOR_STRINGS[$colorCode])) {
            throw new \RuntimeException('Unsupported color code passed in');
        }

        return new self($colorCode);
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return static::COLOR_STRINGS[$this->colorCode];
    }

}