<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Strategy;

interface MathOperationInterface
{
    public function compute(int $a, int $b): int;
}
