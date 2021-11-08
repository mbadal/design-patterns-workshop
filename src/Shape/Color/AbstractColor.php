<?php

declare(strict_types=1);

namespace Delvesoft\Shape\Color;

abstract class AbstractColor
{
    const COLOR_RED   = 'red';
    const COLOR_BLUE  = 'blue';
    const COLOR_GREEN = 'green';

    public abstract function getValue(): string;
}
