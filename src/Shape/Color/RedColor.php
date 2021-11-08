<?php

declare(strict_types=1);


namespace Delvesoft\Shape\Color;


class RedColor extends AbstractColor
{
    public function getValue(): string
    {
        return self::COLOR_RED;
    }
}
