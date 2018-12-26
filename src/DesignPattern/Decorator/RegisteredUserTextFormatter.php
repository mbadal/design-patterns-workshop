<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Decorator;

use Delvesoft\User\Entity\RegisteredUser;

class RegisteredUserTextFormatter implements RegisteredUserTextFormatterInterface
{
    public function formatText(RegisteredUser $user): string
    {
        return $user->getName();
    }
}