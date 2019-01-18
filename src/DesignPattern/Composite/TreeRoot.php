<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Composite;

class TreeRoot extends TreeRootAbstract
{
    public function printTreeStructure()
    {
        $root = $this->getRoot();
        echo $root->printPath('');
    }
}