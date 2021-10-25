<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\Decorator;


use Delvesoft\User\Entity\RegisteredUser;

class SalutationDecorator implements FormatterInterface
{
    private FormatterInterface $decoratedObject;

    public function __construct(FormatterInterface $decoratedObject)
    {
        $this->decoratedObject = $decoratedObject;
    }

    public function formatText(RegisteredUser $user): string
    {
        $title = $user->isMale() ? 'Pan': 'Pani';

        return "{$title} {$this->decoratedObject->formatText($user)}";
    }
}
