<?php

declare(strict_types=1);

namespace Delvesoft\DocumentConvertor\Dto;

class Document
{
    /** @var string */
    private $contents;

    /**
     * @param string $contents
     */
    public function __construct(string $contents)
    {
        $this->contents = $contents;
    }

    /**
     * @return string
     */
    public function getContents(): string
    {
        return $this->contents;
    }
}