<?php

declare(strict_types=1);

namespace Delvesoft\FileSystem;

interface InodeInterface
{
    /**
     * @param string $actualPath
     */
    public function printPath(string $actualPath);

    /**
     * @return string
     */
    public function getName(): string;
}