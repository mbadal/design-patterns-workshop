<?php

declare(strict_types=1);

namespace Delvesoft\User\Value;

class FormatType
{
    const TYPE_1 = 1;
    const TYPE_2 = 2;
    const TYPE_3 = 3;
    const TYPE_4 = 4;
    const TYPE_5 = 5;

    /** @var int */
    private $value;

    /**
     * @param int $value
     */
    private function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * @param int $value
     *
     * @return FormatType
     */
    public static function createFromInteger(int $value): FormatType
    {
        $checkArray = [
            static::TYPE_1 => true,
            static::TYPE_2 => true,
            static::TYPE_3 => true,
            static::TYPE_4 => true,
            static::TYPE_5 => true,
        ];

        if (!isset($checkArray[$value])) {
            throw new \InvalidArgumentException("Value: [{$value}] is not supported");
        }

        return new self($value);
    }

    /**
     * @return bool
     */
    public function isFirstType(): bool
    {
        return ($this->value === static::TYPE_1);
    }

    /**
     * @return bool
     */
    public function isSecondType(): bool
    {
        return ($this->value === static::TYPE_2);
    }

    /**
     * @return bool
     */
    public function isThirdType(): bool
    {
        return ($this->value === static::TYPE_3);
    }

    /**
     * @return bool
     */
    public function isFourthType(): bool
    {
        return ($this->value === static::TYPE_4);
    }

    /**
     * @return bool
     */
    public function isFifthType(): bool
    {
        return ($this->value === static::TYPE_5);
    }
}