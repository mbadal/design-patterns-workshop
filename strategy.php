<?php

declare(strict_types=1);

use Delvesoft\Calculator\Calculator;

require_once 'vendor/autoload.php';

/**
 * Zadanie:
 *      V balicku `Delvesoft\Calculator` je implementovana "jednoducha" implementacia kalkulacky, ktora podporuje 5 zakladny operacii: +,-,*,/,^.
 *      Upravte kod pouzitim strategy patternu. Nad patternom ako takym nemusite nejako strasne rozmyslat - pravdepodobne
 *      bude stacit, pokial zabezpecite, aby kod splnal OPEN/CLOSED principle. Automaticky vas to zavedie k strategy patternu.
 * Podmienky:
 *      - Nemente signaturu metody Calculator::caluclate
 *      - Riesenie implementujte do namespace `Delvesoft\DesignPattern\Strategy`
 * Vystup:
 *  + operation result: [15]
 *  - operation result: [5]
 *  * operation result: [50]
 *  / operation result: [2]
 *  ^ operation result: [100000]
 */


$a = 10;
$b = 5;

$calculator = new Calculator();

printf("+ operation result: [%s] %s", $calculator->compute($a, $b, '+'), PHP_EOL);
printf("- operation result: [%s] %s", $calculator->compute($a, $b, '-'), PHP_EOL);
printf("* operation result: [%s] %s", $calculator->compute($a, $b, '*'), PHP_EOL);
printf("/ operation result: [%s] %s", $calculator->compute($a, $b, '/'), PHP_EOL);
printf("^ operation result: [%s] %s", $calculator->compute($a, $b, '^'), PHP_EOL);
