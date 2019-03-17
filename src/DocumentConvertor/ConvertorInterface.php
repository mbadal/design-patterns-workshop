<?php

declare(strict_types=1);

namespace Delvesoft\DocumentConvertor;

use Delvesoft\DocumentConvertor\Dto\Document;
use Delvesoft\DocumentConvertor\ValueObject\DocumentFormat;

interface ConvertorInterface
{
    public function convert(string $contents): Document;

    public function getFormat(): DocumentFormat;
}