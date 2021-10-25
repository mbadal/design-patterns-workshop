<?php

declare(strict_types=1);

namespace Delvesoft\Fixtures;

class FixtureLoader
{
    private DatabaseConnection $databaseConnection;

    public function __construct(DatabaseConnection $databaseConnection)
    {
        $this->databaseConnection = $databaseConnection;
    }

    public function loadFixtures(bool $withTransaction = true)
    {
        if ($withTransaction === true && $this->databaseConnection->isTransactionActive()) {
            $this->databaseConnection->rollback();
        }

        if ($withTransaction === true) {
            $this->databaseConnection->beginTransaction();
        }

        $this->loadFixturesByDefinition();
    }

    private function loadFixturesByDefinition()
    {
        printf("Loading fixtures\n");
    }
}
