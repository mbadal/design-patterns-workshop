<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Proxy\Bank;

use Delvesoft\Bank\Account;

final class AccountProxy extends Account
{
    private ?float $balanceCache = null;

    public function getBalance(): float
    {
        if ($this->balanceCache === null) {
            $this->balanceCache = parent::getBalance();
        }

        return $this->balanceCache;
    }
}
