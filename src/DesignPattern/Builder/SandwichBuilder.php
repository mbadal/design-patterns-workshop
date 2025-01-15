<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\Builder;


use Delvesoft\Sandwich\Ingredient\Cheese\CheeseInterface;
use Delvesoft\Sandwich\Ingredient\IngredientInterface;
use Delvesoft\Sandwich\Ingredient\Main\MainInterface;
use Delvesoft\Sandwich\Ingredient\Vegetable\VegetableInterface;
use Delvesoft\Sandwich\Sandwich;
use Delvesoft\Sandwich\SandwichInterface;

class SandwichBuilder
{
    /** @var IngredientInterface[] */
    private array $ingredients;

    public function startPreparation(): SandwichBuilder
    {
        $this->ingredients = [];

        return $this;
    }

    public function setMainIngredient(MainInterface $main): SandwichBuilder
    {
        $this->ingredients[$main->getName()] = $main;

        return $this;
    }

    public function addVegetable(VegetableInterface $vegetable): SandwichBuilder
    {
        $this->ingredients[$vegetable->getName()] = $vegetable;

        return $this;
    }


    public function setCheese(CheeseInterface $cheese): SandwichBuilder
    {
        $this->ingredients[$cheese->getName()] = $cheese;

        return $this;
    }

    public function reset(): SandwichBuilder
    {
        $this->ingredients = [];

        return $this;
    }

    /**
     * @return SandwichInterface
     */
    public function build(): SandwichInterface
    {
        if ($this->ingredients === []) {
            throw new \RuntimeException('No ingredients');
        }

        $ingredientsToBeDelivered = $this->ingredients;
        $this->ingredients        = [];

        return new Sandwich(
            $ingredientsToBeDelivered

        );
    }
}
