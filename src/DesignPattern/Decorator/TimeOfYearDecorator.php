<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Decorator;

use Delvesoft\User\Entity\RegisteredUser;

class TimeOfYearDecorator implements RegisteredUserTextFormatterInterface
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
        $output = '';
        if ($user->wasRegisteredDuringChristmas()) {
            $output .= 'Stastne a vesele vianoce';
        } elseif ($user->wasRegisteredDuringEaster()) {
            $output .= 'Veselu Velku Noc';
        } else {
            $output .= 'Prijemny den';
        }

        return "{$output} {$this->decoratedObject->formatText($user)}";
    }
}