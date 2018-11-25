<?php

declare(strict_types=1);

use Carbon\Carbon;
use Delvesoft\DesignPattern\Decorator\RegisteredUserNameFormatter;
use Delvesoft\DesignPattern\Decorator\RegisteredUserTextFormatterInterface;
use Delvesoft\DesignPattern\Decorator\SalutationDecorator;
use Delvesoft\DesignPattern\Decorator\TimeOfYearDecorator;
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
 * @param RegisteredUserTextFormatterInterface $formatter
 * @param RegisteredUser                       $registeredUser
 */
function renderUserInfo(RegisteredUserTextFormatterInterface $formatter, RegisteredUser $registeredUser)
{
    echo $formatter->formatText($registeredUser), "\n";
}

/* 1. oslovenie */
$nameFormatter = new RegisteredUserNameFormatter();
renderUserInfo($nameFormatter, $christmasUser);
renderUserInfo($nameFormatter, $easterUser);
renderUserInfo($nameFormatter, $regularUser);
echo "\n";

/* 2. oslovenie */
$salutationDecoratedFormatter = new SalutationDecorator($nameFormatter);
renderUserInfo($salutationDecoratedFormatter, $christmasUser);
renderUserInfo($salutationDecoratedFormatter, $easterUser);
renderUserInfo($salutationDecoratedFormatter, $regularUser);
echo "\n";

/* 3. oslovenie */
$timeOfYearDecorator = new TimeOfYearDecorator($nameFormatter);
renderUserInfo($timeOfYearDecorator, $christmasUser);
renderUserInfo($timeOfYearDecorator, $easterUser);
renderUserInfo($timeOfYearDecorator, $regularUser);
echo "\n";

/* 4. oslovenie */
$timeOfYearDecorator2 = new TimeOfYearDecorator($salutationDecoratedFormatter);
renderUserInfo($timeOfYearDecorator2, $christmasUser);
renderUserInfo($timeOfYearDecorator2, $easterUser);
renderUserInfo($timeOfYearDecorator2, $regularUser);
echo "\n";

/* 5. oslovenie */
$salutationDecorator = new SalutationDecorator($timeOfYearDecorator);
renderUserInfo($salutationDecorator, $christmasUser);
renderUserInfo($salutationDecorator, $easterUser);
renderUserInfo($salutationDecorator, $regularUser);
