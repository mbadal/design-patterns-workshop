<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Decorator;

use Delvesoft\User\Entity\RegisteredUser;

interface RegisteredUserTextFormatterInterface
{
    /**
     * @param RegisteredUser $user
     *
     * @return string
     */
    public function formatText(RegisteredUser $user): string;
}