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

    /**
     * @param InodeInterface $inode
     *
     */
    public abstract function printInodePath(InodeInterface $inode);

    /**
     * @param InodeInterface $inode
     *
     * @return mixed
     */
    public abstract function printTreeStructure(InodeInterface $inode);
}