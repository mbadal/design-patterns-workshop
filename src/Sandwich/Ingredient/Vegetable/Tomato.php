<?php

declare(strict_types=1);

namespace Delvesoft\Sandwich\Ingredient\Vegetable;

class Tomato implements VegetableInterface
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Tomato';
    }
}