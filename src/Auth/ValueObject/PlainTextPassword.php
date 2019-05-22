<?php declare(strict_types=1);

namespace Delvesoft\Auth\ValueObject;

use InvalidArgumentException;

class PlainTextPassword
{
    /** @var string */
    private $value;

    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @param string $value
     *
     * @return PlainTextPassword
     */
    public static function createFromString(string $value): PlainTextPassword
    {
        $loginLength = strlen($value);
        if ($loginLength < 6 || $loginLength > 32) {
            throw new InvalidArgumentException("Argument: [{$value}] is not a valid login");
        }

        return new self($value);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->value;
    }
}