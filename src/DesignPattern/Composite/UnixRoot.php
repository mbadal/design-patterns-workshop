<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Composite;

class UnixRoot extends TreeRootAbstract
{
    public function printTreeStructure(): void
    {
        $root = $this->getRoot();
        $root->printPath('');
    }
}
