<?php

declare(strict_types=1);

namespace Delvesoft\Fixtures;

class DatabaseConnection
{
    private bool $isTransactionActive = false;

    public function isTransactionActive(): bool
    {
        return $this->isTransactionActive;
    }

    public function beginTransaction()
    {
        $this->isTransactionActive = true;
        printf("Transaction was started\n");
    }

    public function rollback()
    {
        $this->isTransactionActive = false;
        printf("Transaction was aborted\n");
    }
}
