<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Decorator;

use Delvesoft\User\Entity\RegisteredUser;

class RegisteredUserTextFormatter implements RegisteredUserTextFormatterInterface
{
    public function formatText(RegisteredUser $user): string
    {
        $output = '';
        $output .= $user->isMale() ? 'Pan ' : 'Pani ';
        $output .= $user->getName() . ' ';
        if ($user->wasRegisteredDuringChristmas()) {
            $output .= 'Stastne a vesele vianoce';
        } elseif ($user->wasRegisteredDuringEaster()) {
            $output .= 'Veselu Velku Noc';
        } else {
            $output .= 'Prijemny den';
        }

        return $output;
    }
}