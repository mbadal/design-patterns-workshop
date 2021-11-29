<?php

declare(strict_types=1);

use Delvesoft\DesignPattern\ChainOfResponsibility\LoginRequest;
use Delvesoft\DesignPattern\ChainOfResponsibility\LocalLoginResolver;
use Delvesoft\DesignPattern\ChainOfResponsibility\LdapLoginResolver;
use Delvesoft\DesignPattern\ChainOfResponsibility\LoginResponse;
use Delvesoft\DesignPattern\ChainOfResponsibility\ResolverToUse;

require_once 'vendor/autoload.php';


/**
 * Problem:
 *      Mame system, do ktoreho sa je mozne prihlasovat. System si drzi vlastnu databazu prihlasovacich udajov.
 *      Zaroven je vsak don mozne sa prihlasit aj cez firemny LDAP. Medzi tymito dvoma sposobmi nie je ziadny vztah ->
 *      ked niekto ma LDAP, moze si vytvorit aj lokalnu registraciu. Nie kazdy vo firme vsak ma pristup cez firemny LDAP ->
 *      prihlasuju sa len cez lokalnu registraciu.
 * Zadanie:
 *      Vytvorte komponent, ktory bude schopny zachytit a spracovat oba typy poziadaviek na prihlasenie vyuzitim Chain of Responsibility patternu.
 * Podmienky:
 *      - Ako zaklad pre jednotlive handlery vyuzite `Delvesoft\DesignPattern\ChainOfResponsibility\LoginResolverInterface`. Nemente signaturu metody.
 *      - Vyuzite triedy `LoginRequest` a `LoginResponse`.
 *      - Logiku overovania prihlasenia mozte riesit cez TODO, resp. cez textovy vypis
 *      - Vo vacsine pripadov dopredu nevieme, ktory handler je "ten spravny - vie spracovat poziadavku".
 *      - Rozsirte kod tak, aby bol mozny override sposobu prihlasenia - mame scenar, ked dopredu vieme, o aky typ registracie ide. Vtedy je zbytocne skusat vobec iny typ prihlasenia.
 * Vystup:
 *      --- Person1 ---
 *      User: [user1@profesia.sk] verified with: [LocalLoginResolver]. Override: [false]
 *      ---------------
 *
 *      --- Person2 ---
 *      User: [user2@profesia.sk] verified with: [LdapLoginResolver]. Override: [false]
 *      ---------------
 *
 *      --- Person3 ---
 *      User: [user3@profesia.sk] verified with: [LdapLoginResolver]. Override: [true]
 *      ---------------
 *
 *      --- Person4 ---
 *      User: [user4@profesia.sk] was not verified
 *      ---------------
 */

function logResponse(LoginResponse $response, int $order) {
    printf('--- Person%s ---%s', $order,PHP_EOL);

    if ($response->isUserFound()) {
        printf(
            'User: [%s] verified with: [LocalLoginResolver]. Override: [%s]%s',
            $response->getLogin(),
            $response->wasOverride() ? 'true' : 'false',
            PHP_EOL
        );
    } else {
        printf(
            'User: [%s] was not verified%s',
            $response->getLogin(),
            PHP_EOL
        );
    }

    printf('---------------%s%s', PHP_EOL, PHP_EOL);
}

$localResolver = new LocalLoginResolver();
$ldapResolver  = new LdapLoginResolver();

$chain = $localResolver->setNext(
    $ldapResolver
);


$response = $chain->resolve(
    new LoginRequest(
        'user1@profesia.sk',
        'password1'
    )
);
logResponse($response, 1);

$response = $chain->resolve(
    new LoginRequest(
        'user2@profesia.sk',
        'password2'
    )
);
logResponse($response, 2);

$response = $chain->resolve(
    new LoginRequest(
        'user3@profesia.sk',
        'password3',
        ResolverToUse::createLdap()
    )
);
logResponse($response, 3);
