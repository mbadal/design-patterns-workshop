<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Proxy;

use Delvesoft\Bank\Account;

class AccountProxy extends Account
{
    /** @var float */
    private $balance;

    public function getBalance(): float
    {
        if ($this->balance === null) {
            $this->balance = parent::getBalance();
        }

        return $this->balance;
    }
}