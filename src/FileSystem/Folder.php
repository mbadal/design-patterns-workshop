<?php

declare(strict_types=1);

namespace Delvesoft\FileSystem;

class Folder extends FolderAbstract
{
    public function printPath(string $actualPath): void
    {
        $children = $this->getChildren();
        if ($children === []) {
            echo "{$actualPath}/{$this->getName()}\n";

            return;
        }

        foreach ($children as $child) {
            $child->printPath("{$actualPath}/{$this->getName()}");
        }
    }
}
