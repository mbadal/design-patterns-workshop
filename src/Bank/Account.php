<?php

declare(strict_types=1);

namespace Delvesoft\Bank;

class Account
{
    /** @var TransactionInterface[] */
    private array $transactions = [];

    public function push(TransactionInterface $transaction): Account
    {
        $this->transactions[] = $transaction;

        return $this;
    }

    public function getBalance(): float
    {
        printf("Calculating account balance\n");
        return array_reduce($this->transactions, function ($carry, TransactionInterface $item) {
            return $item->getOperation()->calculate($carry, $item->getAmount());
        }, 0.0);
    }
}
