<?php

declare(strict_types=1);

namespace Delvesoft\FileSystem;

interface InodeInterface
{
    public function printPath(string $actualPath);

    public function getName(): string;
}
