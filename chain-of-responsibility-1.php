<?php

declare(strict_types=1);

use Delvesoft\DesignPattern\ChainOfResponsibility\DressUpStep;
use Delvesoft\DesignPattern\ChainOfResponsibility\LockTheDoorStep;
use Delvesoft\DesignPattern\ChainOfResponsibility\PutOnShoesStep;
use Delvesoft\DesignPattern\ChainOfResponsibility\TurnOffLightsStep;
use Delvesoft\DesignPattern\ChainOfResponsibility\HouseLeavingRequest;

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
 *  - Dezo je menej inteligentny    - najprv si obuje topanky, potom vypne svetla, zamkne dvere (bez toho, aby sa obliekol)
 * Zadanie:
 *      - Implementujte zmeny v kode aplikovanim Chain of responsibility patternu.
 *      - Kod by mal byt konfigurovatelny - malo by byt schopne docielit 3 pripady pouzitia aj bez IF-ov.
 *      - Vyuzite `Delvesoft\DesignPattern\ChainOfResponsibility\AbstractStep`.
 * Podmienky:
 *      - Ako zaklad pre handler triedy vyuzite abstraktnu triedu `Delvesoft\DesignPattern\ChainOfResponsibility\AbstractStep`
 *      - Nemente signaturu triedy `Delvesoft\DesignPattern\ChainOfResponsibility\AbstractStep`
 * Vystup:
 *      Putting on clothes
 *      Turning off the lights
 *      Putting on shoes
 *      Locking the door
 *      House leaving successful
 *      --------
 *
 *      Turning off the lights
 *      Putting on clothes
 *      Putting on shoes
 *      Locking the door
 *      House leaving successful
 *      --------
 *      Putting on shoes
 *      Turning off the lights
 *      Locking the door
 *      House leaving successful
 *      --------
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
$chain1->process(
    new HouseLeavingRequest()
);
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

$chain2->process(
    new HouseLeavingRequest()
);
//finally
printf('House leaving successful%s', PHP_EOL);
printf('--------%s%s', PHP_EOL, PHP_EOL);

$chain3 = $putOnShoesStep->setNext(
    $turnOffLightsStep->setNext(
        $lockTheDoorStep
    )
);

$chain3->process(
    new HouseLeavingRequest()
);
//finally
printf('House leaving successful%s', PHP_EOL);
printf('--------%s%s', PHP_EOL, PHP_EOL);
