<?php

declare(strict_types=1);


namespace Delvesoft\Fixtures;


class TransactionRollbackDecorator implements FixtureLoaderInterface
{
    private DatabaseConnection $databaseConnection;
    private FixtureLoaderInterface $decoratedObject;

    public function __construct(DatabaseConnection $databaseConnection, FixtureLoaderInterface $decoratedObject)
    {
        $this->databaseConnection = $databaseConnection;
        $this->decoratedObject    = $decoratedObject;
    }

    public function loadFixtures(): void
    {
        if ($this->databaseConnection->isTransactionActive()) {
            $this->databaseConnection->rollback();
        }

        $this->databaseConnection->beginTransaction();
        $this->decoratedObject->loadFixtures();
    }
}
