<?php

declare(strict_types=1);

namespace Delvesoft\User\Entity;

use Carbon\Carbon;
use Delvesoft\User\Value\Gender;
use Delvesoft\User\Value\Name;

class RegisteredUser
{
    private Name $name;
    private Carbon $dateOfRegistration;
    private Gender $gender;

    public function __construct(Name $name, Carbon $dateOfRegistration, Gender $gender)
    {
        $this->name               = $name;
        $this->dateOfRegistration = $dateOfRegistration;
        $this->gender             = $gender;
    }

    public function wasRegisteredDuringChristmas(): bool
    {
        return ($this->dateOfRegistration->month === 12);
    }

    public function wasRegisteredDuringEaster(): bool
    {
        return ($this->dateOfRegistration->month === 4);
    }

    public function isMale(): bool
    {
        return $this->gender->isMale();
    }

    public function isFemale(): bool
    {
        return $this->gender->isFemale();
    }

    public function getName(): string
    {
        return $this->name->getName();
    }
}
