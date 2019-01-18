<?php

declare(strict_types=1);

namespace Delvesoft\FileSystem;

abstract class FolderAbstract implements InodeInterface
{
    /** @var string */
    private $name;

    /** @var InodeInterface[] */
    private $children = [];

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param InodeInterface $child
     *
     * @return $this
     */
    public function addChild(InodeInterface $child): FolderAbstract
    {
        $this->children[$child->printName()] = $child;

        return $this;
    }

    /**
     * @return string
     */
    protected function getName(): string
    {
        return $this->name;
    }

    /**
     * @return InodeInterface[]
     */
    protected function getChildren(): array
    {
        return $this->children;
    }
}