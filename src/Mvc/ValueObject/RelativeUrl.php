<?php

declare(strict_types=1);

namespace Delvesoft\Mvc\ValueObject;

use InvalidArgumentException;

class RelativeUrl
{
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
     * @param string $url
     *
     * @return RelativeUrl
     */
    public static function createFromString(string $url): RelativeUrl
    {
        if (strpos($url, '/') !== 0) {
            throw new InvalidArgumentException("Argument: [{$url}] should start with `/`");
        }

        return new self($url);
    }

    /**
     * @param string $url
     *
     * @return bool
     */
    public function match(string $url): bool
    {
        return ($this->value === $url);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->value;
    }
}