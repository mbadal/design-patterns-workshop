<?php

declare(strict_types=1);

use Carbon\Carbon;
use Delvesoft\DesignPattern\Decorator\RegisteredUserTextFormatter;
use Delvesoft\User\Entity\RegisteredUser;
use Delvesoft\User\Value\FormatType;
use Delvesoft\User\Value\Gender;
use Delvesoft\User\Value\Name;

require 'vendor/autoload.php';

$timezone      = 'Europe/Bratislava';
$christmasUser = new RegisteredUser(
    Name::createFromString('Udo'),
    Carbon::createFromDate(2018, 12, 12, $timezone),
    Gender::createFromString(Gender::GENDER_MALE)
);

$easternUser = new RegisteredUser(
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
 *      - [Meno]
 *      - [Pan/Pani] [Meno]
 *      - [Stastne a Vesele Vianoce/Prijemnu Velku noc/Prijemny den] [Meno]
 *      - [Stastne a Vesele Vianoce/Prijemnu Velku noc/Prijemny den] [Pan/Pani] [Meno]
 *      - [Pan/Pani] [Stastne a Vesele Vianoce/Prijemnu Velku noc/Prijemny den] [Meno]
 * - Podmienky:
 *      - riesenie implementujte v 'Delvesoft\DesignPattern\Decorator\RegisteredUserTextFormatter'
 *      - riesenie nemusi byt implementovane vramci jednej triedy, drzte sa Delvesoft\DesignPattern\Decorator\RegisteredUserTextFormatterInterface,
 * ak chcete, mozte trochu upravit signaturu metody ale lepsie bude, ak to nespravite
 *      - dbajte na znovupouzitelnost kodu
 */

/* 1. oslovenie */
$formatType = FormatType::createFromInteger(FormatType::TYPE_1);
$formatter  = new RegisteredUserTextFormatter();
echo $formatter->formatText($christmasUser, $formatType), "\n";
echo $formatter->formatText($easternUser, $formatType), "\n";
echo $formatter->formatText($regularUser, $formatType), "\n";
echo "\n";

/* 2. oslovenie */
$formatType = FormatType::createFromInteger(FormatType::TYPE_2);
$formatter  = new RegisteredUserTextFormatter();
echo $formatter->formatText($christmasUser, $formatType), "\n";
echo $formatter->formatText($easternUser, $formatType), "\n";
echo $formatter->formatText($regularUser, $formatType), "\n";
echo "\n";

/* 3. oslovenie */
$formatType = FormatType::createFromInteger(FormatType::TYPE_3);
$formatter  = new RegisteredUserTextFormatter();
echo $formatter->formatText($christmasUser, $formatType), "\n";
echo $formatter->formatText($easternUser, $formatType), "\n";
echo $formatter->formatText($regularUser, $formatType), "\n";
echo "\n";

/* 4. oslovenie */
$formatType = FormatType::createFromInteger(FormatType::TYPE_4);
$formatter  = new RegisteredUserTextFormatter();
echo $formatter->formatText($christmasUser, $formatType), "\n";
echo $formatter->formatText($easternUser, $formatType), "\n";
echo $formatter->formatText($regularUser, $formatType), "\n";
echo "\n";

/* 5. oslovenie */
$formatType = FormatType::createFromInteger(FormatType::TYPE_5);
$formatter  = new RegisteredUserTextFormatter();
echo $formatter->formatText($christmasUser, $formatType), "\n";
echo $formatter->formatText($easternUser, $formatType), "\n";
echo $formatter->formatText($regularUser, $formatType), "\n";
