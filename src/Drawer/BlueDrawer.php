<?php

declare(strict_types=1);


namespace Delvesoft\Drawer;


use Delvesoft\Shape\Color\Color;

class BlueDrawer extends AbstractDrawer
{
    protected function getColor(): string
    {
        return Color::COLOR_BLUE;
    }
}
