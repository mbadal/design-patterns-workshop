<?php

declare(strict_types=1);

namespace Delvesoft\Sandwich;

use Delvesoft\Sandwich\Ingredient\Cheese\CheeseInterface;
use Delvesoft\Sandwich\Ingredient\IngredientInterface;
use Delvesoft\Sandwich\Ingredient\Main\MainInterface;
use Delvesoft\Sandwich\Ingredient\Vegetable\VegetableInterface;

final class Sandwich implements SandwichInterface
{
    /** @var IngredientInterface[] */
    private array $ingredients;

    /**
     * @param IngredientInterface[] $ingredients
     */
    public function __construct(array $ingredients)
    {
        $this->ingredients = $ingredients;
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    public function getIngredientsList(): string
    {
        return array_reduce($this->ingredients, function ($carry, IngredientInterface $ingredient) {
            if ($carry === '') {
                return $ingredient->getName();
            }

            return "{$carry}, {$ingredient->getName()}";
        }, '');
    }

}
