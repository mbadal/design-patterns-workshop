<?php

declare(strict_types=1);

namespace Delvesoft\Bank;

use Delvesoft\Bank\ValueObject\Operation;

class Transaction implements TransactionInterface
{
    /** @var float */
    private $amount;

    /** @var Operation */
    private $operation;

    /**
     * @param float     $amount
     * @param Operation $operation
     */
    public function __construct(float $amount, Operation $operation)
    {
        $this->amount    = $amount;
        $this->operation = $operation;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return Operation
     */
    public function getOperation(): Operation
    {
        return $this->operation;
    }
}