<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\Decorator;


use Delvesoft\User\Entity\RegisteredUser;

interface FormatterInterface
{
    public function formatText(RegisteredUser $user): string;
}
