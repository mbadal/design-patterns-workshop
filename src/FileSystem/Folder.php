<?php

declare(strict_types=1);

namespace Delvesoft\FileSystem;

class Folder implements InodeInterface
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
    public function addChild(InodeInterface $child): Folder
    {
        $this->children[$child->getName()] = $child;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function hasChildren(): bool
    {
        return true;
    }
}