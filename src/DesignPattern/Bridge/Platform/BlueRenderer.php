<?php

namespace Delvesoft\DesignPattern\Bridge\Platform;

use Delvesoft\Shape\Color\Color;

class BlueRenderer extends ColoredRendererAbstract
{
    public function __construct()
    {
        parent::__construct(Color::createFromInteger(Color::COLOR_BLUE));
    }
}
