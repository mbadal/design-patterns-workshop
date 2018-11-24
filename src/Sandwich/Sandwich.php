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
    private $cheese;

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

    public function printIngredients()
    {
        $outputParts = [];
        $index = 0;
        if (!is_null($this->main)) {
            $outputParts[$index++] = $this->main->getName();
        }

        if (!is_null($this->cheese)) {
            $outputParts[$index++] = $this->cheese->getName();
        }

        /** @var VegetableInterface $item */
        $vegetableString = implode(', ', array_map(function ($item) {
            return $item->getName();
        }, $this->vegetables));

        if (!empty($vegetableString)) {
            $outputParts[$index] = $vegetableString;
        }

        echo 'Sandwich: ', implode('; ', $outputParts);
    }
}