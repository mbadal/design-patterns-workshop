<?php

declare(strict_types=1);

namespace Delvesoft\Sandwich\Ingredient\Main;

class Beef implements MainInterface
{
    public function getMainType(): string
    {
        return static::TYPE_MEAT;
    }
}