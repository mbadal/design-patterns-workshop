<?php

declare(strict_types=1);

use Delvesoft\DesignPattern\ChainOfResponsibility\DressUpStep;
use Delvesoft\DesignPattern\ChainOfResponsibility\LockTheDoorStep;
use Delvesoft\DesignPattern\ChainOfResponsibility\PutOnShoesStep;
use Delvesoft\DesignPattern\ChainOfResponsibility\TurnOffLightsStep;

require_once 'vendor/autoload.php';


/**
 * Mame kod - balicek `Delvesoft\Home\HouseLeavingProcedure`, v ktorom je implementovna procedura odchodu z domu, ktora sa sklada z viacerych samostatnych krokov:
 *      - Obleciem sa
 *      - Vypnem svetla
 *      - Obujem si topanky
 *      - Zamknem dvere
 * Mame 3 pouzivatelov, z ktorych kazdy pouzije proceduru pri odchode z domu:
 *  - Imro je standardny pouzivatel - pouzije klasicku proceduru
 *  - Lojzo je citlivy na svetlo    - najprv vypne svetla a nasledne pokracuje podla povodneho poradia
 *  - Dezo je menej inteligentny    - najprv si obuje topanky, potom vypne svetla, oblecie sa a zamkne dvere
 * Zadanie:
 *      - Implementujte zmeny v kode aplikovanim Chain of responsibility patternu.
 *      - Kod by mal byt konfigurovatelny - malo by byt schopne docielit 3 pripady pouzitia aj bez IF-ov.
 *      - Vyuzite `Delvesoft\DesignPattern\ChainOfResponsibility\AbstractStep`.
 */


$dressUpStep       = new DressUpStep();
$turnOffLightsStep = new TurnOffLightsStep();
$putOnShoesStep    = new PutOnShoesStep();
$lockTheDoorStep   = new LockTheDoorStep();

$chain1 = $dressUpStep->setNext(
    $turnOffLightsStep->setNext(
        $putOnShoesStep->setNext(
            $lockTheDoorStep
        )
    )
);
$chain1->process();
//finally
printf('House leaving successful%s', PHP_EOL);
printf('--------%s%s', PHP_EOL, PHP_EOL);

$chain2 = $turnOffLightsStep->setNext(
    $dressUpStep->setNext(
        $putOnShoesStep->setNext(
            $lockTheDoorStep
        )
    )
);

$chain2->process();
//finally
printf('House leaving successful%s', PHP_EOL);
printf('--------%s%s', PHP_EOL, PHP_EOL);

$chain3 = $putOnShoesStep->setNext(
    $turnOffLightsStep->setNext(
        $dressUpStep->setNext(
            $lockTheDoorStep
        )
    )
);

$chain3->process();
//finally
printf('House leaving successful%s', PHP_EOL);
printf('--------%s%s', PHP_EOL, PHP_EOL);
