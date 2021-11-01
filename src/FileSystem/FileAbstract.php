<?php

declare(strict_types=1);

namespace Delvesoft\FileSystem;

abstract class FileAbstract implements InodeInterface
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
