<?php

declare(strict_types=1);

require 'vendor/autoload.php';

/**
 * Instrukcie:
 * - vytvorte komponent, pomocou ktoreho bude mozne vytvarat rozne implementacie v baliku 'Delvesoft\Car\Component\*'
 * - Podmienky:
 *      - jedna trieda musi vediet vytvorit oba typy komponentov (Hood aj Tire)
 *      - upravte vhodne strukturu 'Delvesoft\Car\Component\*, '
 *      - Core riesenia (logiku) implementujete do 'Delvesoft\DesignPattern\AbstractFactory'
 * - Vystup:
 *      Products: Hood of vendor: [sparco], Tire of vendor: [sparco]
 *      Products: Hood of vendor: [racing], Tire of vendor: [racing]
 */

function testFactory($factory)
{
    $hood = $factory->createHood();
    $tire = $factory->createTire();

    printf('Products: %s, %s', $hood->getFullName(), $tire->getFullName());
}
