<?php

declare(strict_types=1);

namespace Delvesoft\Bank;

use Delvesoft\Bank\ValueObject\Operation;

class Transaction implements TransactionInterface
{
    private float $amount;

    private Operation $operation;

    public function __construct(float $amount, Operation $operation)
    {
        $this->amount    = $amount;
        $this->operation = $operation;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getOperation(): Operation
    {
        return $this->operation;
    }
}
