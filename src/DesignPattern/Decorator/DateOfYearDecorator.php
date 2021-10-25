<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\Decorator;


use Delvesoft\User\Entity\RegisteredUser;

class DateOfYearDecorator implements FormatterInterface
{
    private FormatterInterface $decoratedObject;

    public function __construct(FormatterInterface $decoratedObject)
    {
        $this->decoratedObject = $decoratedObject;
    }

    public function formatText(RegisteredUser $user): string
    {
        $timeOfYear = '';
        if ($user->wasRegisteredDuringChristmas()) {
            $timeOfYear = 'Stastne a Vesele Vianoce';
        } elseif ($user->wasRegisteredDuringEaster()) {
            $timeOfYear = 'Prijemnu Velku noc';
        } else {
            $timeOfYear = 'Prijemny den';
        }

        return "{$timeOfYear} {$this->decoratedObject->formatText($user)}";
    }

}
