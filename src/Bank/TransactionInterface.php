<?php

declare(strict_types=1);

namespace Delvesoft\Bank;

use Delvesoft\Bank\ValueObject\Operation;

interface TransactionInterface
{
    public function getAmount(): float;

    public function getOperation(): Operation;
}
