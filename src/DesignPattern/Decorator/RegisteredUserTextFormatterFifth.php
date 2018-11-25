<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Decorator;

use Delvesoft\User\Entity\RegisteredUser;

class RegisteredUserTextFormatterFifth implements RegisteredUserTextFormatterInterface
{
    /**
     * @param RegisteredUser $user
     *
     * @return string
     */
    public function formatText(RegisteredUser $user): string
    {
        $output = $user->isMale() ? 'Pan ' : 'Pani ';
        if ($user->wasRegisteredDuringChristmas()) {
            $output .= 'Stastne a vesele vianoce ';
        } elseif ($user->wasRegisteredDuringEaster()) {
            $output .= 'Veselu Velku Noc ';
        } else {
            $output .= 'Prijemny den ';
        }

        $output .= $user->getName();

        return $output;
    }

}