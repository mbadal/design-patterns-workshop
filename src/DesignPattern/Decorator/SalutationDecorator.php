<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Decorator;

use Delvesoft\User\Entity\RegisteredUser;

class SalutationDecorator implements RegisteredUserTextFormatterInterface
{
    /** @var RegisteredUserTextFormatterInterface */
    private $decoratedObject;

    /**
     * @param RegisteredUserTextFormatterInterface $decoratedObject
     */
    public function __construct(RegisteredUserTextFormatterInterface $decoratedObject)
    {
        $this->decoratedObject = $decoratedObject;
    }

    /**
     * @param RegisteredUser $user
     *
     * @return string
     */
    public function formatText(RegisteredUser $user): string
    {
        $genderString = $user->isMale() ? 'Pan' : 'Pani';

        return "{$genderString} {$this->decoratedObject->formatText($user)}";
    }
}