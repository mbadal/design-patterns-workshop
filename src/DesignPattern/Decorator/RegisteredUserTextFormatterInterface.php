<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Decorator;

use Delvesoft\User\Entity\RegisteredUser;
use Delvesoft\User\Value\FormatType;

interface RegisteredUserTextFormatterInterface
{
    /**
     * @param RegisteredUser $user
     * @param FormatType     $type
     *
     * @return string
     */
    public function formatText(RegisteredUser $user, FormatType $type): string;
}