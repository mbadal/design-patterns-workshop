<?php

declare(strict_types=1);

use Delvesoft\DesignPattern\Builder\SandwichBuilder;

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
 *      - Pozadovany vustup po spusteni builder.php:
 *          Sandwich: Teriyaki chicken; Cheddar; Tomato, Pepper
 *          Sandwich: Tuna; Gouda; Olives
 *          Sandwich: Beef
 */

try {
    $builder = new SandwichBuilder();

    $builder
        ->startPreparation()
        ->setMainIngredient(new \Delvesoft\Sandwich\Ingredient\Main\TeriyakiChicken())
        ->addVegetable(new \Delvesoft\Sandwich\Ingredient\Vegetable\Tomato())
        ->addVegetable(new \Delvesoft\Sandwich\Ingredient\Vegetable\Pepper())
        ->setCheese(new \Delvesoft\Sandwich\Ingredient\Cheese\Cheddar());
    echo $builder->build()->getIngredientsList(), "\n";

    $builder
        ->startPreparation()
        ->setMainIngredient(new \Delvesoft\Sandwich\Ingredient\Main\Tuna())
        ->addVegetable(new \Delvesoft\Sandwich\Ingredient\Vegetable\Olives())
        ->setCheese(new \Delvesoft\Sandwich\Ingredient\Cheese\Gouda());
    echo $builder->build()->getIngredientsList(), "\n";

    $builder
        ->startPreparation()
        ->setMainIngredient(new \Delvesoft\Sandwich\Ingredient\Main\Beef());

    echo $builder->build()->getIngredientsList(), "\n";
} catch (Exception $e) {
    error_log($e->getMessage());
}
