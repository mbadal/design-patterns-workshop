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
 * - Program pobezi jeden krat v troch volaniach, v pprvych dvoch volanich chceme volanie s transakciu, v tretom volani bez transakcie.
 * - Vzorovy vystup:
 *      1. beh:
 *          Transaction was started
 *          Loading fixtures
 *      2. beh:
 *          Transaction was aborted
 *          Transaction was started
 *          Loading fixtures
 *      3. beh
 *          Loading fixtures
 */


$fixtureLoader = new FixtureLoader(new DatabaseConnection());
$fixtureLoader->loadFixtures();
$fixtureLoader->loadFixtures();
$fixtureLoader->loadFixtures(false);
