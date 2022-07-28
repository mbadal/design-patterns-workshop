<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use Delvesoft\DesignPattern\Tree\Node;

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
