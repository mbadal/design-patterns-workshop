<?php

declare(strict_types=1);

namespace Delvesoft\Fixtures;

class DatabaseConnection
{
    /** @var bool */
    private $isTransactionActive = false;

    /**
     * @return bool
     */
    public function isTransactionActive()
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