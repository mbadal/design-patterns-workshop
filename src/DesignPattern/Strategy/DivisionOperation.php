<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\Strategy;


class DivisionOperation implements MathOperationInterface
{
    public function compute(int $a, int $b): int
    {
        if ($b === 0) {
            throw new \RuntimeException('Division by zero');
        }

        return ($a / $b);
    }
}
