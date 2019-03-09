<?php

declare(strict_types=1);

namespace Delvesoft\Bank;

class Account
{
    /** @var TransactionInterface[] */
    private $transactions = [];

    /**
     * @param TransactionInterface $transaction
     *
     * @return Account
     */
    public function push(TransactionInterface $transaction): Account
    {
        $this->transactions[] = $transaction;

        return $this;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return (float)array_reduce($this->transactions, function ($carry, TransactionInterface $item) {
            if ($item->getOperation()->isDeposit()) {
                return $carry + $item->getAmount();
            }

            return $carry - $item->getAmount();
        }, 0.0);
    }
}