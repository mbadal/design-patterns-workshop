<?php
declare(strict_types=1);

namespace Delvesoft\Shape;

use Delvesoft\Drawer\DrawerInterface;

interface ShapeInterface
{
    public function draw(DrawerInterface $drawer): void;
}
