<?php

declare(strict_types=1);

namespace Delvesoft\DocumentConvertor\ValueObject;

use InvalidArgumentException;

class Url
{
    private string $url;

    private function __construct(string $url)
    {
        $this->url = $url;
    }

    public static function createFromString(string $url): Url
    {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new InvalidArgumentException("String: [{$url}] is not valid URL address");
        }

        return new self($url);
    }

    public function toString(): string
    {
        return $this->url;
    }

    public function __toString()
    {
        return $this->toString();
    }
}
