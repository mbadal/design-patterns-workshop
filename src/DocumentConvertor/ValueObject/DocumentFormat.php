<?php

declare(strict_types=1);

namespace Delvesoft\DocumentConvertor\ValueObject;

class DocumentFormat
{
    const FORMAT_PDF  = 'pdf';
    const FORMAT_WORD = 'word';

    /** @var string */
    private $value;

    /**
     * @param string $value
     */
    private function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @return DocumentFormat
     */
    public static function createPdfFormat(): self
    {
        return new self(static::FORMAT_PDF);
    }

    /**
     * @return DocumentFormat
     */
    public static function createWordFormat(): self
    {
        return new self(static::FORMAT_WORD);
    }

    /**
     * @return bool
     */
    public function isPdf(): bool
    {
        return $this->value === static::FORMAT_PDF;
    }

    /**
     * @return bool
     */
    public function isWord(): bool
    {
        return $this->value === static::FORMAT_WORD;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->value;
    }
}