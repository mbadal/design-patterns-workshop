<?php

declare(strict_types=1);

namespace Delvesoft\Sandwich;

use Delvesoft\Sandwich\Ingredient\Cheese\CheeseInterface;
use Delvesoft\Sandwich\Ingredient\IngredientInterface;
use Delvesoft\Sandwich\Ingredient\Main\MainInterface;
use Delvesoft\Sandwich\Ingredient\Vegetable\VegetableInterface;

interface SandwichInterface
{
    /**
     * @return IngredientInterface[]
     */
    public function getIngredients(): array;
    public function getIngredientsList(): string;
}
