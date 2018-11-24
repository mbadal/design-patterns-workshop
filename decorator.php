<?php

declare(strict_types=1);

use Carbon\Carbon;
use Delvesoft\DesignPattern\Decorator\RegisteredUserTextFormatter;
use Delvesoft\User\Entity\RegisteredUser;
use Delvesoft\User\Value\Gender;
use Delvesoft\User\Value\Name;

require 'vendor/autoload.php';

$timezone      = 'Europe/Bratislava';
$christmasUser = new RegisteredUser(
    Name::createFromString('Udo'),
    Carbon::createFromDate(2018, 12, 12, $timezone),
    Gender::createFromString(Gender::GENDER_MALE)
);

$easterUser = new RegisteredUser(
    Name::createFromString('Gertruda'),
    Carbon::createFromDate(2018, 04, 25, $timezone),
    Gender::createFromString(Gender::GENDER_FEMALE)
);

$regularUser = new RegisteredUser(
    Name::createFromString('Timotej'),
    Carbon::createFromDate(2017, 6, 12, $timezone),
    Gender::createFromString(Gender::GENDER_MALE)
);

/**
 * Instrukcie:
 * - vytvorte komponent, ktory bude schopny generovat z User objektov rozne druhy oslovenia:
 *      - [Pan/Pani] [Meno] [Stastne a vesele Vianoce/Prijemnu Velku noc/Prijemny den]
 *      - [Meno] [Stastne a Vesele Vianoce/Prijemnu Velku noc/Prijemny den]
 *      - [Meno] [Pan/Pani]
 *      - [Stastne a Vesele Vianoce/Prijemnu Velku noc/Prijemny den] [Pan/Pani] [Meno]
 * - Podmienky:
 *      - riesenie implementujte v 'Delvesoft\DesignPattern\Decorator\RegisteredUserTextFormatter'
 *      - riesenie nemusi byt implementovane vramci jednej triedy, ale je potrebne dodrzat rozhranie Delvesoft\DesignPattern\Decorator\RegisteredUserTextFormatterInterface
 *      - dbajte na znovupouzitelnost kodu
 */

/* 1. oslovenie */
$formatter = new RegisteredUserTextFormatter();
echo $formatter->formatText($christmasUser), "\n";
echo $formatter->formatText($easterUser), "\n";
echo $formatter->formatText($regularUser), "\n";

/* 2. oslovenie */
/* @TODO */

/* 3. oslovenie */
/* @TODO */

/* 4. oslovenie */
/* @TODO */