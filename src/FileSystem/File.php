<?php

declare(strict_types=1);

namespace Delvesoft\FileSystem;

class File implements InodeInterface
{
    /** @var string */
    private $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
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
        return false;
    }
}