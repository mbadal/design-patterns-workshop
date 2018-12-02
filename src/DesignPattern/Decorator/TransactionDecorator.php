<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Decorator;

use Delvesoft\Fixtures\DatabaseConnection;

class TransactionDecorator implements FixtureLoaderInterface
{
    /** @var FixtureLoaderInterface */
    private $instanceToDecorate;

    /** @var DatabaseConnection */
    private $databaseConnection;

    /**
     * @param FixtureLoaderInterface $instanceToDecorate
     * @param DatabaseConnection     $databaseConnection
     */
    public function __construct(FixtureLoaderInterface $instanceToDecorate, DatabaseConnection $databaseConnection)
    {
        $this->instanceToDecorate = $instanceToDecorate;
        $this->databaseConnection = $databaseConnection;
    }

    public function loadFixtures()
    {
        if ($this->databaseConnection->isTransactionActive()) {
            $this->databaseConnection->rollback();
        }

        $this->databaseConnection->beginTransaction();
        $this->instanceToDecorate->loadFixtures();
    }
}