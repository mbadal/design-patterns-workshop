<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Composite;

use Delvesoft\FileSystem\InodeInterface;

abstract class TreeRootAbstract
{
    /** @var InodeInterface */
    private $root;

    /**
     * @param InodeInterface $root
     */
    public function __construct(InodeInterface $root)
    {
        $this->root = $root;
    }

    public abstract function printTreeStructure();

    /**
     * @return InodeInterface
     */
    protected function getRoot(): InodeInterface
    {
        return $this->root;
    }
}