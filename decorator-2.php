<?php

declare(strict_types=1);

use Delvesoft\DesignPattern\Decorator\TransactionDecorator;
use Delvesoft\Fixtures\DatabaseConnection;
use Delvesoft\Fixtures\FixtureLoader;

require 'vendor/autoload.php';

/**
 * Instrukcie:
 * - zrefaktorujte kod tak prerobenim na decorator pattern
 * - Podmienky:
 *      - balicek 'Delvesoft\Fixtures' musi podporovat nacitavanie fixtur aj s transakciou, aj bez transakcii
 */


$fixtureLoader = new FixtureLoader();
$decorator     = new TransactionDecorator($fixtureLoader, new DatabaseConnection());
$decorator->loadFixtures();
$decorator->loadFixtures();
echo "----------------------\n";

$fixtureLoader->loadFixtures();
$fixtureLoader->loadFixtures();