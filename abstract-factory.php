<?php

declare(strict_types=1);

use Delvesoft\DesignPattern\AbstractFactory\ComponentFactoryInterface;
use Delvesoft\DesignPattern\AbstractFactory\RacingFactory;
use Delvesoft\DesignPattern\AbstractFactory\SparcoFactory;

require 'vendor/autoload.php';

/**
 * Instrukcie:
 * - vytvorte komponent, pomocou ktoreho bude mozne vytvarat rozne implementacie v baliku 'Delvesoft\Car\Component\*'
 * - Podmienky:
 *      - jedna trieda musi vediet vytvorit oba typy komponentov (Hood aj Tire)
 *      - upravte vhodne strukturu 'Delvesoft\Car\Component\*, '
 *      - Core riesenia (logiku) implementujete do 'Delvesoft\DesignPattern\AbstractFactory'
 */

/**
 * @param ComponentFactoryInterface $factory
 */
function testFactory(ComponentFactoryInterface $factory)
{
    $hood = $factory->createHood();
    $tire = $factory->createTire();

    printf("Products: %s, %s\n", $hood->getFullName(), $tire->getFullName());
}

testFactory(new SparcoFactory());
testFactory(new RacingFactory());
