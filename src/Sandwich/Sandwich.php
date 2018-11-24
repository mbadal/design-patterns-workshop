<?php

declare(strict_types=1);

namespace Delvesoft\Sandwich;

use Delvesoft\Sandwich\Ingredient\Cheese\CheeseInterface;
use Delvesoft\Sandwich\Ingredient\Main\MainInterface;
use Delvesoft\Sandwich\Ingredient\Vegetable\VegetableInterface;

final class Sandwich implements SandwichInterface
{
    /** @var MainInterface */
    private $main;

    /** @var VegetableInterface[] */
    private $vegetables = [];

    /** @var CheeseInterface */
    private $cheese = [];

    /**
     * @param MainInterface $main
     */
    public function setMainIngredient(MainInterface $main)
    {
        $this->main = $main;
    }

    /**
     * @param VegetableInterface $vegetable
     */
    public function addVegetable(VegetableInterface $vegetable)
    {
        $this->vegetables[get_class($vegetable)] = $vegetable;
    }

    /**
     * @param CheeseInterface $cheese
     */
    public function addCheese(CheeseInterface $cheese)
    {
        $this->cheese = $cheese;
    }
}