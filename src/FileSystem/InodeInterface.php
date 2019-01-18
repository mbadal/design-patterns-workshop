<?php

declare(strict_types=1);

namespace Delvesoft\FileSystem;

interface InodeInterface
{
    /**
     * @return string
     */
    public function printName(): string;
}