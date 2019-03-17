<?php

declare(strict_types=1);

namespace Delvesoft\DocumentConvertor;

use Delvesoft\DocumentConvertor\Dto\Document;
use Delvesoft\DocumentConvertor\ValueObject\Url;

class DocumentSaver
{
    public function save(Document $document, Url $destinationPath, string $title)
    {
        printf("Saving document with name: [{$title}] to destination: [{$destinationPath->toString()}]\n");
    }
}