<?php declare(strict_types=1);

namespace Delvesoft\Auth\ValueObject;

use InvalidArgumentException;

class Login
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
     * @param string $value
     *
     * @return Login
     */
    public static function createFromString(string $value): Login
    {
        $loginLength = strlen($value);
        if ($loginLength < 6 || $loginLength > 20) {
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