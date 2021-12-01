<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\Strategy;


class PlusOperation implements MathOperationInterface
{
    public function compute(int $a, int $b): int
    {
        return ($a + $b);
    }
}
