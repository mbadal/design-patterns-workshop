<?php

declare(strict_types=1);

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
    //@TODO
} catch (Exception $e) {
    error_log($e->getMessage());
}