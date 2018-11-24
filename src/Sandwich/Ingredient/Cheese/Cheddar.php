<?php

declare(strict_types=1);

namespace Delvesoft\Sandwich\Ingredient\Cheese;

class Cheddar implements CheeseInterface
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Cheddar';
    }
}