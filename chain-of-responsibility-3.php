<?php

declare(strict_types=1);

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
 */

//@todo
