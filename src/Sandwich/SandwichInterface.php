<?php

declare(strict_types=1);

namespace Delvesoft\Sandwich;

use Delvesoft\Sandwich\Ingredient\Cheese\CheeseInterface;
use Delvesoft\Sandwich\Ingredient\Main\MainInterface;
use Delvesoft\Sandwich\Ingredient\Vegetable\VegetableInterface;

interface SandwichInterface
{
    /**
     * @param MainInterface $main
     */
    public function setMainIngredient(MainInterface $main);

    /**
     * @param VegetableInterface $vegetable
     */
    public function addVegetable(VegetableInterface $vegetable);

    /**
     * @param CheeseInterface $cheese
     */
    public function addCheese(CheeseInterface $cheese);

    /**
     * @return void
     */
    public function printIngredients();
}