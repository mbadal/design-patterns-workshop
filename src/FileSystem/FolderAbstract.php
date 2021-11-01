<?php

declare(strict_types=1);

namespace Delvesoft\FileSystem;

abstract class FolderAbstract implements InodeInterface
{
    private string $name;

    /** @var InodeInterface[] */
    private array $children;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addChild(InodeInterface $child): FolderAbstract
    {
        $this->children[$child->getName()] = $child;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    protected function getChildren(): array
    {
        return $this->children;
    }
}
