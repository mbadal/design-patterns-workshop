<?php

declare(strict_types=1);

namespace Delvesoft\Fixtures;

class FixtureLoader
{
    /** @var DatabaseConnection */
    private $databaseConnection;

    /**
     * @param DatabaseConnection $databaseConnection
     */
    public function __construct(DatabaseConnection $databaseConnection)
    {
        $this->databaseConnection = $databaseConnection;
    }

    public function loadFixtures()
    {
        if ($this->databaseConnection->isTransactionActive()) {
            $this->databaseConnection->rollback();
        }


        $this->databaseConnection->beginTransaction();
        $this->loadFixturesByDefinition();
    }

    private function loadFixturesByDefinition()
    {
        printf("Loading fixtures\n");
    }
}