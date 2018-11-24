<?php

declare(strict_types=1);

use Delvesoft\Car\Component\ComponentInterface;

require 'vendor/autoload.php';

/**
 * Instrukcie:
 * - vytvorte komponent, pomocou ktoreho bude mozne vytvarat rozne implementacie v baliku 'Delvesoft\Car\Component\*'
 * - Podmienky:
 *      - jedna trieda musi vediet vytvorit oba typy komponentov (Hood aj Tire)
 *      - upravte vhodne strukturu 'Delvesoft\Car\Component\*, '
 *      - Core riesenia (logiku) implementujete do 'Delvesoft\DesignPattern\AbstractFactory'
 */

function testFactory($factory)
{
    /** @var ComponentInterface $hood */
    $hood = $factory->createHood();

    /** @var ComponentInterface $tire */
    $tire = $factory->createTire();

    printf('Products: %s, %s', $hood->getFullName(), $tire->getFullName());
}