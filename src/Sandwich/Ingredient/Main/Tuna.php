<?php

declare(strict_types=1);

namespace Delvesoft\Sandwich\Ingredient\Main;

class Tuna implements MainInterface
{
    /**
     * @return string
     */
    public function getMainType(): string
    {
        return static::TYPE_FISH;
    }
}