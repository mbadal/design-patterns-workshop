<?php

declare(strict_types=1);

use Carbon\Carbon;
use Delvesoft\Formatter\RegisteredUserTextFormatter;
use Delvesoft\User\Entity\RegisteredUser;
use Delvesoft\User\Value\Gender;
use Delvesoft\User\Value\Name;

require 'vendor/autoload.php';

$timezone      = new DateTimeZone('Europe/Bratislava');
$christmasUser = new RegisteredUser(
    Name::createFromString('Udo'),
    Carbon::createFromFormat('Y-m-d', '2018-12-12', $timezone),
    Gender::createFromString(Gender::GENDER_MALE)
);

$easterUser = new RegisteredUser(
    Name::createFromString('Gertruda'),
    Carbon::createFromFormat('Y-m-d', '2018-04-25', $timezone),
    Gender::createFromString(Gender::GENDER_FEMALE)
);

$regularUser = new RegisteredUser(
    Name::createFromString('Timotej'),
    Carbon::createFromFormat('Y-m-d', '2017-06-12', $timezone),
    Gender::createFromString(Gender::GENDER_MALE)
);

/**
 * Instrukcie:
 * - vytvorte komponent, ktory bude schopny generovat z User objektov rozne druhy oslovenia:
 *      - [Meno]
 *      - [Pan/Pani] [Meno]
 *      - [Stastne a Vesele Vianoce/Prijemnu Velku noc/Prijemny den] [Meno]
 *      - [Stastne a Vesele Vianoce/Prijemnu Velku noc/Prijemny den] [Pan/Pani] [Meno]
 *      - [Pan/Pani] [Stastne a Vesele Vianoce/Prijemnu Velku noc/Prijemny den] [Meno]
 * - Podmienky:
 *      - riesenie implementujte v 'Delvesoft\DesignPattern\Decorator\RegisteredUserTextFormatter'
 *      - riesenie nemusi byt implementovane vramci jednej triedy, drzte sa Delvesoft\DesignPattern\Decorator\RegisteredUserTextFormatterInterface,
 *        ak chcete, mozte trochu upravit signaturu metody ale lepsie bude, ak to nespravite
 *      - dbajte na znovupouzitelnost kodu
 */

/* 1. oslovenie */
$formatter = new RegisteredUserTextFormatter();
echo $formatter->formatText($christmasUser), PHP_EOL;
echo $formatter->formatText($easterUser), PHP_EOL;
echo $formatter->formatText($regularUser), PHP_EOL;

/* 2. oslovenie */
echo $formatter->formatText($christmasUser, true), PHP_EOL;
echo $formatter->formatText($easterUser, true), PHP_EOL;
echo $formatter->formatText($regularUser, true), PHP_EOL;

/* 3. oslovenie */
echo $formatter->formatText($christmasUser, false, true), PHP_EOL;
echo $formatter->formatText($easterUser, false, true), PHP_EOL;
echo $formatter->formatText($regularUser, false, true), PHP_EOL;

/* 4. oslovenie */
echo $formatter->formatText($christmasUser, true, true, false), PHP_EOL;
echo $formatter->formatText($easterUser, true, true, false), PHP_EOL;
echo $formatter->formatText($regularUser, true, true, false), PHP_EOL;

/* 5. oslovenie */
echo $formatter->formatText($christmasUser, true, true, true), PHP_EOL;
echo $formatter->formatText($easterUser, true, true, true), PHP_EOL;
echo $formatter->formatText($regularUser, true, true, true), PHP_EOL;
