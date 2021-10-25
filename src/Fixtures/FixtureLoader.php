<?php

declare(strict_types=1);

namespace Delvesoft\Fixtures;

class FixtureLoader implements FixtureLoaderInterface
{
    private DatabaseConnection $databaseConnection;

    public function __construct(DatabaseConnection $databaseConnection)
    {
        $this->databaseConnection = $databaseConnection;
    }

    public function loadFixtures(): void
    {
        $this->loadFixturesByDefinition();
    }

    private function loadFixturesByDefinition()
    {
        printf("Loading fixtures\n");
    }
}
