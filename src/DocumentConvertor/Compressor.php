<?php

declare(strict_types=1);

namespace Delvesoft\DocumentConvertor;

use Delvesoft\DocumentConvertor\Dto\Document;

class Compressor
{
    /**
     * @param Document $document
     *
     * @return Document
     */
    public function compressDocument(Document $document): Document
    {
        printf("Compressing document\n");
        //@todo compression logic
        return $document;
    }
}