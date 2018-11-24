<?php

declare(strict_types=1);

namespace Delvesoft\DesignPatterns\Creational\Builder\Ingredient;

interface IngredientInterface
{
    /**
     * @return string
     */
    public function getName(): string;
}