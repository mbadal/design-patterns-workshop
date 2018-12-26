<?php

declare(strict_types=1);

namespace Delvesoft\User\Value;

class Gender
{
    const GENDER_MALE   = 'M';
    const GENDER_FEMALE = 'F';

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
     * @param string $genderString
     *
     * @return Gender
     */
    public static function createFromString(string $genderString): Gender
    {
        if ($genderString !== static::GENDER_MALE && $genderString !== static::GENDER_FEMALE) {
            throw new \InvalidArgumentException("Gender string: [{$genderString}] is not valid");
        }

        return new self($genderString);
    }

    /**
     * @return bool
     */
    public function isMale(): bool
    {
        return ($this->value === static::GENDER_MALE);
    }

    /**
     * @return bool
     */
    public function isFemale(): bool
    {
        return ($this->value === static::GENDER_FEMALE);
    }
}