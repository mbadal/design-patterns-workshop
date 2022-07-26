<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\Tree;


interface NodeInterface
{
    public function getValue(): int;
    public function getLeftSubTree(): ?NodeInterface;
    public function getRightSubTree(): ?NodeInterface;
}
