<?php

declare(strict_types=1);

namespace Delvesoft\ServiceLayer\ValueObject;

use InvalidArgumentException;

class Url
{
    /** @var string */
    private $url;

    /**
     * @param string $url
     */
    private function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * @param string $url
     *
     * @return Url
     */
    public static function createFromString(string $url): Url
    {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new InvalidArgumentException("String: [{$url}] is not valid URL address");
        }

        return new self($url);
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->toString();
    }
}