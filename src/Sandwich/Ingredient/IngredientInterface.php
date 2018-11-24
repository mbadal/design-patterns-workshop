<?php

declare(strict_types=1);

namespace Delvesoft\Sandwich\Ingredient;

interface IngredientInterface
{
    /**
     * @return string
     */
    public function getName(): string;
}