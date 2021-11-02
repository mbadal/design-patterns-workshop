<?php

declare(strict_types=1);

namespace Delvesoft\Bank\ValueObject;

class Operation
{
    const OPERATION_DEPOSIT  = 'deposit';
    const OPERATION_WITHDRAW = 'withdraw';

    const OPERATION_SIGN = [
        self::OPERATION_DEPOSIT  => '+',
        self::OPERATION_WITHDRAW => '-',
    ];

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

    public function isDeposit(): bool
    {
        return $this->operation === static::OPERATION_DEPOSIT;
    }

    public function isWithdraw(): bool
    {
        return $this->operation === static::OPERATION_WITHDRAW;
    }
}
