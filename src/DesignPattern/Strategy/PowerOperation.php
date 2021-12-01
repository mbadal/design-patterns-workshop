<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\Strategy;


class PowerOperation implements MathOperationInterface
{
    public function compute(int $a, int $b): int
    {
        return (pow($a, $b));
    }
}
