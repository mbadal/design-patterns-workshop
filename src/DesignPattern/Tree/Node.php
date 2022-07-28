<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\Tree;


class Node implements NodeInterface
{
    private ?NodeInterface $left = null;
    private ?NodeInterface $right = null;

    public function __construct(
        private int $value,
    ) {
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function setLeft(?NodeInterface $left): void
    {
        $this->left = $left;
    }

    public function setRight(?NodeInterface $right): void
    {
        $this->right = $right;
    }

    public function getLeftSubTree(): ?NodeInterface
    {
        return $this->left;
    }

    public function getRightSubTree(): ?NodeInterface
    {
        return $this->right;
    }
}
