<?php

declare(strict_types=1);

use Delvesoft\Fixtures\DatabaseConnection;
use Delvesoft\Fixtures\FixtureLoader;

require 'vendor/autoload.php';

/**
 * Instrukcie:
 * - zrefaktorujte kod prerobenim na decorator pattern
 * - Podmienky:
 *      - balicek 'Delvesoft\Fixtures' musi podporovat nacitavanie fixtur aj s transakciou, aj bez transakcii
 * - Vzorovy vystup:
 *      Transaction was started
 *      Loading fixtures
 *      Transaction was aborted
 *      Transaction was started
 *      Loading fixtures
 *      Loading fixtures
 *      Loading fixtures
 */


$fixtureLoader = new FixtureLoader(new DatabaseConnection());
$fixtureLoader->loadFixtures();
$fixtureLoader->loadFixtures();
