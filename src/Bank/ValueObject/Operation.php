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

    /** @var string */
    private $operation;

    /**
     * @param string $operation
     */
    private function __construct(string $operation)
    {
        $this->operation = $operation;
    }

    /**
     * @return Operation
     */
    public static function createWithdraw(): Operation
    {
        return new self(static::OPERATION_WITHDRAW);
    }

    /**
     * @return Operation
     */
    public static function createDeposit(): Operation
    {
        return new self(static::OPERATION_DEPOSIT);
    }

    /**
     * @return bool
     */
    public function isDeposit(): bool
    {
        return $this->operation === static::OPERATION_DEPOSIT;
    }

    /**
     * @return bool
     */
    public function isWithdraw()
    {
        return $this->operation === static::OPERATION_WITHDRAW;
    }
}