<?php

declare(strict_types=1);

namespace Delvesoft\Bank\ValueObject;

class Operation
{
    const OPERATION_DEPOSIT  = 'deposit';
    const OPERATION_WITHDRAW = 'withdraw';
    private string $operation;

    private function __construct(string $operation)
    {
        $this->operation = $operation;
    }

    public static function createWithdraw(): Operation
    {
        return new self(static::OPERATION_WITHDRAW);
    }

    public static function createDeposit(): Operation
    {
        return new self(static::OPERATION_DEPOSIT);
    }

    public function calculate(float $a, float $b): float
    {
        if ($this->operation === static::OPERATION_DEPOSIT) {
            return $a + $b;
        }

        return $a - $b;
    }
}
