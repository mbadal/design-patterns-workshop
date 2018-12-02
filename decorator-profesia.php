<?php

declare(strict_types=1);

use Delvesoft\Fixtures\DatabaseConnection;
use Delvesoft\Fixtures\FixtureLoader;

require 'vendor/autoload.php';

/**
 * Instrukcie:
 * - zrefaktorujte kod tak prerobenim na decorator pattern
 * - Podmienky:
 *      - balicek 'Delvesoft\Fixtures' musi podporovat nacitavanie fixtur aj s transakciou, aj bez transakcii
 */


$fixtureLoader = new FixtureLoader(new DatabaseConnection());
$fixtureLoader->loadFixtures();
$fixtureLoader->loadFixtures();
