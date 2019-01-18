<?php

declare(strict_types=1);

namespace Delvesoft\FileSystem;

interface InodeInterface
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return bool
     */
    public function hasChildren(): bool;
}