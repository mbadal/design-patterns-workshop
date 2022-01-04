<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use Delvesoft\Calculator\Calculator;

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

