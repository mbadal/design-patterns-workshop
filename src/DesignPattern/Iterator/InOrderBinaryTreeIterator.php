<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\Iterator;

use Delvesoft\DesignPattern\Tree\NodeInterface;
use Iterator;

class InOrderBinaryTreeIterator implements Iterator
{
    private int $index = 0;

    /** @var NodeInterface[] */
    private array $visitedNodes = [];

    public function __construct(NodeInterface $root) {
        $this->visit($root);
    }

    public function current(): NodeInterface
    {
        return $this->visitedNodes[$this->index];
    }

    public function next(): void
    {
        $this->index++;
    }

    public function key(): int
    {
        return $this->index;
    }

    public function valid(): bool
    {
        return ($this->index < sizeof($this->visitedNodes));
    }

    public function rewind(): void
    {
        $this->index = 0;
    }

    private function visit(?NodeInterface $tree = null): void
    {
        if ($tree === null) {
            return;
        }

        $this->visit($tree->getLeftSubTree());
        $this->visitedNodes[] = $tree;
        $this->visit($tree->getRightSubTree());
    }
}
