<?php

declare(strict_types=1);

use Delvesoft\Bank\Account;
use Delvesoft\Bank\Transaction;
use Delvesoft\Bank\ValueObject\Operation;

require 'vendor/autoload.php';

/**
 * Instrukcie:
 *  - v Balicku `Delvesoft\Bank` je implementovany jednoduchy bankovy system umoznujuci pridavanie transakcie (depozit, vyber)
 *  - Trieda `Account` reprezentuje stav na ucte, ktory sa rata na zaklade prebehnutych transakcii
 *  - metoda `getBalance` vrati aktualny stav naucte, transakcii moze byt velmi vela, ich vypocet moze trvat dlho
 *  - Podmienky:
 *      - trieda Account sa rozsiahlo pouziva v celej code base. Extrahovat z nej interface je problem
 *      - zabezpecte, aby sa trieda dala pouzit bez toho, aby sa zakazdim prepocitavali vsetky transakcie
 *      - vyuzite Proxy pattern
 *  - Vzorovy vystup
 *      Calculating account balance
 *      float(21.7)
 *      float(21.7)
 *      float(21.7)
 */

$proxy = new \Delvesoft\DesignPattern\Proxy\Bank\AccountProxy();
$proxy->push(new Transaction(15.1, Operation::createDeposit()));
$proxy->push(new Transaction(2.7, Operation::createWithdraw()));
$proxy->push(new Transaction(1.0, Operation::createWithdraw()));
$proxy->push(new Transaction(0.5, Operation::createWithdraw()));
$proxy->push(new Transaction(10.8, Operation::createDeposit()));

function printAccountBalance(Account $account)
{
    var_dump($account->getBalance());
}

printAccountBalance($proxy);
printAccountBalance($proxy);
printAccountBalance($proxy);
