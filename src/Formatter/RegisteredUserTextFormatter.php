<?php

declare(strict_types=1);

namespace Delvesoft\Formatter;

use Delvesoft\DesignPattern\Decorator\FormatterInterface;
use Delvesoft\User\Entity\RegisteredUser;

class RegisteredUserTextFormatter implements FormatterInterface
{
    public function formatText(RegisteredUser $user): string
    {
        return $user->getName();
    }
}
