<?php

declare(strict_types=1);

namespace Delvesoft\Mvc\ValueObject;

use InvalidArgumentException;

class RelativeUrl
{
    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function createFromString(string $url): RelativeUrl
    {
        if (str_starts_with($url, '/') === false) {
            throw new InvalidArgumentException("Argument: [{$url}] should start with `/`");
        }

        return new self($url);
    }

    public function match(string $url): bool
    {
        return ($this->value === $url);
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
