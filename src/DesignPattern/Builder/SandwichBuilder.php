<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Builder;

use Delvesoft\Sandwich\Ingredient\Cheese\CheeseInterface;
use Delvesoft\Sandwich\Ingredient\Main\MainInterface;
use Delvesoft\Sandwich\Ingredient\Vegetable\VegetableInterface;
use Delvesoft\Sandwich\Sandwich;
use Delvesoft\Sandwich\SandwichInterface;

class SandwichBuilder
{
    /** @var SandwichInterface */
    private $sandwichInPreparation;

    /**
     * @return SandwichBuilder
     */
    public function startPreparation(): SandwichBuilder
    {
        $this->sandwichInPreparation = new Sandwich();

        return $this;
    }

    /**
     * @param MainInterface $main
     *
     * @return SandwichBuilder
     */
    public function setMainIngredient(MainInterface $main): SandwichBuilder
    {
        $this->sandwichInPreparation->setMainIngredient($main);

        return $this;
    }

    /**
     * @param VegetableInterface $vegetable
     *
     * @return SandwichBuilder
     */
    public function addVegetable(VegetableInterface $vegetable): SandwichBuilder
    {
        $this->sandwichInPreparation->addVegetable($vegetable);

        return $this;
    }

    /**
     * @param CheeseInterface $cheese
     *
     * @return SandwichBuilder
     */
    public function setCheese(CheeseInterface $cheese): SandwichBuilder
    {
        $this->sandwichInPreparation->addCheese($cheese);

        return $this;
    }

    /**
     * @return SandwichInterface
     */
    public function sellSandwich(): SandwichInterface
    {
        if (is_null($this->sandwichInPreparation)) {
            throw new \RuntimeException('No sandwich is being prepared');
        }

        $sandwichToBeDelivered       = $this->sandwichInPreparation;
        $this->sandwichInPreparation = null;

        return $sandwichToBeDelivered;
    }
}