<?php

declare(strict_types=1);

namespace Delvesoft\DocumentConvertor;

use Delvesoft\DocumentConvertor\Dto\Document;
use Delvesoft\DocumentConvertor\ValueObject\Url;

class DocumentSaver
{
    /**
     * @param Document $document
     * @param string   $destinationPath
     * @param string   $title
     */
    public function save(Document $document, string $destinationPath, string $title)
    {
        printf("Saving document with name: [{$title}] to destination: [{$destinationPath}]\n");
    }
}