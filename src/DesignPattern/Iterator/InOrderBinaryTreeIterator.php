<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\Iterator;

use Delvesoft\DesignPattern\Tree\NodeInterface;
use Iterator;

class InOrderBinaryTreeIterator implements Iterator
{
    private NodeInterface $actual;

    public function __construct(
        private NodeInterface $root
    )
    {
        $this->actual = $root;
    }

    public function current(): NodeInterface
    {

    }

    public function next()
    {
        // TODO: Implement next() method.
    }

    public function key()
    {
        return $this->actual->getValue();
    }

    public function valid()
    {
        // TODO: Implement valid() method.
    }

    public function rewind()
    {
        $this->actual = $this->root;
    }
}
