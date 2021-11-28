<?php

declare(strict_types=1);

use Delvesoft\DesignPattern\ChainOfResponsibility\DressUp2Step;
use Delvesoft\DesignPattern\ChainOfResponsibility\LockTheDoor2Step;
use Delvesoft\DesignPattern\ChainOfResponsibility\PutOnShoes2Step;
use Delvesoft\DesignPattern\ChainOfResponsibility\TurnOffLights2Step;
use Delvesoft\DesignPattern\ChainOfResponsibility\HouseLeavingRequestWithFinalCheck;

require_once 'vendor/autoload.php';

/**
 * Mame kod - balicek `Delvesoft\Home\HouseLeavingProcedure`, v ktorom je implementovna procedura odchodu z domu, ktora sa sklada z viacerych samostatnych krokov:
 *      - Obleciem sa
 *      - Vypnem svetla
 *      - Obujem si topanky
 *      - Zamknem dvere
 * Zadanie:
 *      V tomto pripade mam  opat 3 pouzivatelov:
 *          - Imro je standardny pouzivatel - pouzije klasicku proceduru
 *          - Lojzo je citlivy na svetlo    - najprv vypne svetla a nasledne pokracuje podla povodneho poradia
 *          - Dezo je menej inteligentny    - najprv si obuje topanky, potom vypne svetla, oblecie sa a zamkne dvere
 *      Musime zabezpecit to, aby sme mali kontrolu nad tym, aby sa menej inteligentni klienti nedostali von bez toho, aby splnili vsetky
 *      podmienky - obliect sa, zhasnut svetla, obut si topanky -> tieto tri kroky su podmienkou zamknutia dveri.
 * Podmienky:
 *      - Ako zaklad pre handler triedy vyuzite abstraktnu triedu `Delvesoft\DesignPattern\ChainOfResponsibility\AbstractStepWithFinalCheck`
 *      - Nemente signaturu metody `Delvesoft\DesignPattern\ChainOfResponsibility\AbstractStepWithFinalCheck::process`
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
 *
 *      Turning off the lights
 *      Door was not locked, missing required steps
 *      House leaving failed
 *      --------
 */

$dressUpStep       = new DressUp2Step();
$turnOffLightsStep = new TurnOffLights2Step();
$putOnShoesStep    = new PutOnShoes2Step();
$lockTheDoorStep   = new LockTheDoor2Step();

$chain1 = $dressUpStep->setNext(
    $turnOffLightsStep->setNext(
        $putOnShoesStep->setNext(
            $lockTheDoorStep
        )
    )
);
$chain1->process(
    new HouseLeavingRequestWithFinalCheck(
        false,
        false,
        false
    )
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
    new HouseLeavingRequestWithFinalCheck(
        false,
        false,
        false
    )
);
//finally
printf('House leaving successful%s', PHP_EOL);
printf('--------%s%s', PHP_EOL, PHP_EOL);

$chain3 = $turnOffLightsStep->setNext(
    $lockTheDoorStep
);

try {
    $chain3->process(
        new HouseLeavingRequestWithFinalCheck(
            false,
            false,
            false
        )
    );

    printf('House leaving successful%s', PHP_EOL);
} catch (LogicException $e) {
    printf('House leaving failed%s', PHP_EOL);
}
