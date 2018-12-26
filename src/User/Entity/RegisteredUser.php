<?php

declare(strict_types=1);

namespace Delvesoft\User\Entity;

use Carbon\Carbon;
use Delvesoft\User\Value\Gender;
use Delvesoft\User\Value\Name;

class RegisteredUser
{
    /** @var Name */
    private $name;

    /** @var \DateTimeImmutable */
    private $dateOfRegistration;

    /** @var Gender */
    private $gender;

    /**
     * @param Name   $name
     * @param Carbon $dateOfRegistration
     * @param Gender $gender
     */
    public function __construct(Name $name, Carbon $dateOfRegistration, Gender $gender)
    {
        $this->name               = $name;
        $this->dateOfRegistration = $dateOfRegistration;
        $this->gender             = $gender;
    }

    /**
     * @return bool
     */
    public function wasRegisteredDuringChristmas(): bool
    {
        return ($this->dateOfRegistration->month === 12);
    }

    /**
     * @return bool
     */
    public function wasRegisteredDuringEaster(): bool
    {
        return ($this->dateOfRegistration->month === 4);
    }

    /**
     * @return bool
     */
    public function isMale(): bool
    {
        return $this->gender->isMale();
    }

    /**
     * @return bool
     */
    public function isFemale(): bool
    {
        return $this->gender->isFemale();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name->getName();
    }
}