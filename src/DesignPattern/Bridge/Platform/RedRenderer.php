<?php

namespace Delvesoft\DesignPattern\Bridge\Platform;

use Delvesoft\Shape\Color\Color;
use Delvesoft\Shape\Point\Point;

class RedRenderer extends ColoredRendererAbstract
{
    public function __construct()
    {
        parent::__construct(Color::createFromInteger(Color::COLOR_RED));
    }
}
