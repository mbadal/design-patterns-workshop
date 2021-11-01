<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Composite;

use Delvesoft\FileSystem\InodeInterface;

abstract class TreeRootAbstract
{
    private InodeInterface $root;

    public function __construct(InodeInterface $root)
    {
        $this->root = $root;
    }

    public abstract function printTreeStructure(): void;

    protected function getRoot(): InodeInterface
    {
        return $this->root;
    }
}
