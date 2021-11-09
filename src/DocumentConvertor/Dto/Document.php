<?php

declare(strict_types=1);

namespace Delvesoft\DocumentConvertor\Dto;

class Document
{
    private string $contents;

    public function __construct(string $contents)
    {
        $this->contents = $contents;
    }
    
    public function getContents(): string
    {
        return $this->contents;
    }
}
