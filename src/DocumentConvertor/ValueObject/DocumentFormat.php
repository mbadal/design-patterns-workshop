<?php

declare(strict_types=1);

namespace Delvesoft\DocumentConvertor\ValueObject;

use RuntimeException;

class DocumentFormat
{
    const FORMAT_PDF  = 'pdf';
    const FORMAT_WORD = 'word';

    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }


    public static function createPdfFormat(): self
    {
        return new self(static::FORMAT_PDF);
    }

    public static function createWordFormat(): self
    {
        return new self(static::FORMAT_WORD);
    }

    public static function createFromString(string $format): self
    {
        if ($format !== self::FORMAT_PDF && $format !== self::FORMAT_WORD) {
            throw new RuntimeException("Unsupported format: [{$format}]");
        }

        return new self($format);
    }

    public function isPdf(): bool
    {
        return $this->value === static::FORMAT_PDF;
    }

    public function isWord(): bool
    {
        return $this->value === static::FORMAT_WORD;
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
