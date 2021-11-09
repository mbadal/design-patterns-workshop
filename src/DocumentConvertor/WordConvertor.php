<?php

declare(strict_types=1);

namespace Delvesoft\DocumentConvertor;

use Delvesoft\DocumentConvertor\Dto\Document;
use Delvesoft\DocumentConvertor\ValueObject\DocumentFormat;

class WordConvertor implements ConvertorInterface
{

    public function convert(string $contents): Document
    {
        printf("Converting document to Word\n");

        return new Document($contents);
    }

    public function getFormat(): DocumentFormat
    {
        return DocumentFormat::createWordFormat();
    }
}
