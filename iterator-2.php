<?php

declare(strict_types=1);

use Delvesoft\DesignPattern\Tree\Node;

require_once 'vendor/autoload.php';

/**
 * Instrukcie:
 *  - V balicku 'Delvesoft\Tree' je implementovany zaklad zjednoduseneho binarneho stromu
 *  - Obsahuje 1 prvok:
 *      - NodeInterface a Node
 *  - Z tohto komponentu je vytvorena nasledovna stromova struktura:
 *
 *                                      60
 *                                    |    \
 *                                  20      70
 *                                |    \       \
 *                              10     40       90
 *                                   |    \    |
 *                                  30     50 80
 *
 *  - V balicku 'Delvesoft\DesignPattern\Iterator' implementujte iterator schopny preiterovat prvky daneho binarneho stromu InOrder algoritmom
 *    - InOrder:
 *          - left
 *          - visit
 *          - right
 *  - Poziadavky:
 *      - Vztahy medzi jednotlivymi prvkami su vytvorene, cize iteratoru musi stacit "odovzdat" root element, z ktoreho sa musi vediet dostat ku kazdemu elementu.
 *      - Nutne je pouzit rekurziu, kedze elementy neobsahuju odkaz na parenta, len na childov
 *      - Poradie pre vypis je nutne urcit naraz - z rovnakeho dovodu ako v predchadzajucom bode to nepojde urobit inak
 *  - Vystup:
 *    10
 *    20
 *    30
 *    40
 *    50
 *    60
 *    70
 *    80
 *    90
 */

$f = new Node(60);
$b = new Node(20);
$g = new Node(70);
$f->setLeft($b);
$f->setRight($g);

$a = new Node(10);
$d = new Node(40);
$b->setLeft($a);
$b->setRight($d);

$c = new Node(30);
$e = new Node(50);
$d->setLeft($c);
$d->setRight($e);

$i = new Node (90);
$g->setRight($i);


$h = new Node(80);
$i->setLeft($h);

$iterator = new \Delvesoft\DesignPattern\Iterator\InOrderBinaryTreeIterator(
    $f
);

foreach ($iterator as $node) {
    echo $node->getValue(), PHP_EOL;
}
