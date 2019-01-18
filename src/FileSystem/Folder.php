<?php

declare(strict_types=1);

namespace Delvesoft\FileSystem;

class Folder extends FolderAbstract
{
    /**
     * @param string $actualPath
     */
    public function printPath(string $actualPath)
    {
        $children = $this->getChildren();
        $actualPath = "{$actualPath}/{$this->getName()}";
        if (empty($children)) {
            echo  $actualPath, "\n";

            return;

        }

        foreach ($this->getChildren() as $child) {
            $child->printPath($actualPath);
        }
    }
}