<?php

declare(strict_types=1);

use Carbon\Carbon;
use Delvesoft\DesignPattern\Decorator\FormatterRegistry;
use Delvesoft\DesignPattern\Decorator\RegisteredUserTextFormatterFifth;
use Delvesoft\DesignPattern\Decorator\RegisteredUserTextFormatterFirst;
use Delvesoft\DesignPattern\Decorator\RegisteredUserTextFormatterFourth;
use Delvesoft\DesignPattern\Decorator\RegisteredUserTextFormatterSecond;
use Delvesoft\DesignPattern\Decorator\RegisteredUserTextFormatterThird;
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
 *      - [Meno]
 *      - [Pan/Pani] [Meno]
 *      - [Stastne a Vesele Vianoce/Prijemnu Velku noc/Prijemny den] [Meno]
 *      - [Stastne a Vesele Vianoce/Prijemnu Velku noc/Prijemny den] [Pan/Pani] [Meno]
 *      - [Pan/Pani] [Stastne a Vesele Vianoce/Prijemnu Velku noc/Prijemny den] [Meno]
 * - Podmienky:
 *      - riesenie implementujte v 'Delvesoft\DesignPattern\Decorator\RegisteredUserTextFormatter'
 *      - riesenie nemusi byt implementovane vramci jednej triedy, drzte sa Delvesoft\DesignPattern\Decorator\RegisteredUserTextFormatterInterface, ak chcete, mozte
 *        trochu upravit signaturu metody ale lepsie bude, ak to nespravite
 *      - dbajte na znovupouzitelnost kodu
 */

/**
 * @param FormatType        $type
 * @param RegisteredUser    $user
 * @param FormatterRegistry $registry
 */
function renderUserInfo(FormatType $type, RegisteredUser $user, FormatterRegistry $registry)
{
    echo $registry->format($type, $user), "\n";
}

$registry = new FormatterRegistry();
$formatType = FormatType::createFromInteger(FormatType::TYPE_1);
$registry->registerFormatter(FormatType::createFromInteger(FormatType::TYPE_1), new RegisteredUserTextFormatterFirst());
$registry->registerFormatter(FormatType::createFromInteger(FormatType::TYPE_2), new RegisteredUserTextFormatterSecond());
$registry->registerFormatter(FormatType::createFromInteger(FormatType::TYPE_3), new RegisteredUserTextFormatterThird());
$registry->registerFormatter(FormatType::createFromInteger(FormatType::TYPE_4), new RegisteredUserTextFormatterFourth());
$registry->registerFormatter(FormatType::createFromInteger(FormatType::TYPE_5), new RegisteredUserTextFormatterFifth());
/* 1. oslovenie */
$formatType = FormatType::createFromInteger(FormatType::TYPE_1);
renderUserInfo($formatType, $christmasUser, $registry);
renderUserInfo($formatType, $easterUser, $registry);
renderUserInfo($formatType, $regularUser, $registry);
echo "\n";

/* 2. oslovenie */
$formatType = FormatType::createFromInteger(FormatType::TYPE_2);
renderUserInfo($formatType, $christmasUser, $registry);
renderUserInfo($formatType, $easterUser, $registry);
renderUserInfo($formatType, $regularUser, $registry);
echo "\n";

/* 3. oslovenie */
$formatType = FormatType::createFromInteger(FormatType::TYPE_3);
renderUserInfo($formatType, $christmasUser, $registry);
renderUserInfo($formatType, $easterUser, $registry);
renderUserInfo($formatType, $regularUser, $registry);
echo "\n";

/* 4. oslovenie */
$formatType = FormatType::createFromInteger(FormatType::TYPE_4);
renderUserInfo($formatType, $christmasUser, $registry);
renderUserInfo($formatType, $easterUser, $registry);
renderUserInfo($formatType, $regularUser, $registry);
echo "\n";

/* 5. oslovenie */
$formatType = FormatType::createFromInteger(FormatType::TYPE_5);
renderUserInfo($formatType, $christmasUser, $registry);
renderUserInfo($formatType, $easterUser, $registry);
renderUserInfo($formatType, $regularUser, $registry);
