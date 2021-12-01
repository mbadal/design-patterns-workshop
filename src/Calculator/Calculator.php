<?php

declare(strict_types=1);


namespace Delvesoft\Calculator;


class Calculator
{
    public function compute(int $a, int $b, string $operation): int
    {
        if ($operation === '+') {
            return ($a + $b);
        } elseif ($operation === '-') {
            return ($a - $b);
        } elseif ($operation === '*') {
            return ($a * $b);
        } elseif ($operation === '/') {
            if ($b === 0) {
                throw new \RuntimeException('Division by zero');
            }

            return ($a/$b);
        } elseif ($operation === '^') {
            return pow($a, $b);
        }

        throw new \RuntimeException('Unsupported operation');
    }
}
