<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use Delvesoft\Calculator\Calculator;

/**
 * Zadanie:
 *      V balicku `Delvesoft\Calculator` je implementovana "jednoducha" implementacia kalkulacky, ktora podporuje 6 zakladny operacii: +,-,*,/,^, ^2.
 *      Upravte kod pouzitim command patternu. Bude potrebne kazdu operaciu zabalit do vlastnej command triedy. Trieda `Delvesoft\Calculator` bude nasledne
 *      miesto, kde sa commandy "budu spustat".
 * Podmienky:
 *      - Zabezpecte, aby trieda `Delvesoft\Calculator` slnala OPEN/CLOSED principle
 *      - Riesenie implementujte do namespace `Delvesoft\DesignPattern\Command`
 *      - AKo zaklad pre jednotlive commandy pouzitie interface `Delvesoft\DesignPattern\Command\CommandInterface`
 * Vystup:
 *  + operation result: [15]
 *  - operation result: [5]
 *  * operation result: [50]
 *  / operation result: [2]
 *  ^ operation result: [100000]
 *  ^2 operation result: [100]
 */

$a = 10;
$b = 5;

$calculator = new Calculator();

$calculator->sum($a, $b);
printf("+ operation result: [%s] %s", $calculator->getResult(), PHP_EOL);

$calculator->subtraction($a, $b);
printf("- operation result: [%s] %s", $calculator->getResult(), PHP_EOL);

$calculator->times($a, $b);
printf("* operation result: [%s] %s", $calculator->getResult(), PHP_EOL);

$calculator->division($a, $b);
printf("/ operation result: [%s] %s", $calculator->getResult(), PHP_EOL);

$calculator->times($a, $b);
printf("^ operation result: [%s] %s", $calculator->getResult(), PHP_EOL);

$calculator->square($a);
printf("^2 operation result: [%s] %s", $calculator->getResult(), PHP_EOL);

