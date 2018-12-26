<?php

declare(strict_types=1);

use Delvesoft\DesignPattern\Builder\SandwichBuilder;
use Delvesoft\Sandwich\Ingredient\Cheese\Cheddar;
use Delvesoft\Sandwich\Ingredient\Cheese\Gouda;
use Delvesoft\Sandwich\Ingredient\Main\Beef;
use Delvesoft\Sandwich\Ingredient\Main\TeriyakiChicken;
use Delvesoft\Sandwich\Ingredient\Main\Tuna;
use Delvesoft\Sandwich\Ingredient\Vegetable\Olives;
use Delvesoft\Sandwich\Ingredient\Vegetable\Pepper;
use Delvesoft\Sandwich\Ingredient\Vegetable\Tomato;

require 'vendor/autoload.php';

/**
 * Instrukcie:
 * - vytvorte komponent, pomocou ktoreho bude mozne vytvarat sendvice v roznej konfiguracii (maso, zelenina, syr)
 * - skonstruujte 3 sendvice:
 *      - teriyaki kura + cheddar + paradajky, paprika
 *      - tuniak + gouda + olivy
 *      - cisto hovadzi sendvic
 * - Podmienky:
 *      - nesmiete zasiahnut do rozhrania existujucich objektov v nemespace 'Delvesoft\Sandwich'
 *      - vsetky vase triedy implementujte do 'Delvesoft\DesignPattern\Builder'
 */

$builder = new SandwichBuilder();
try {
    $sandwich = $builder
        ->startPreparation()
        ->setMainIngredient(new TeriyakiChicken())
        ->setCheese(new Cheddar())
        ->addVegetable(new Tomato())
        ->addVegetable(new Pepper())
        ->sellSandwich();
    $sandwich->printIngredients();
    echo "\n";

    $sandwich = $builder
        ->startPreparation()
        ->setMainIngredient(new Tuna())
        ->setCheese(new Gouda())
        ->addVegetable(new Olives())
        ->sellSandwich();
    $sandwich->printIngredients();
    echo "\n";

    $sandwich = $builder
        ->startPreparation()
        ->setMainIngredient(new Beef())
        ->sellSandwich();
    $sandwich->printIngredients();
} catch (Exception $e) {
    error_log($e->getMessage());
}