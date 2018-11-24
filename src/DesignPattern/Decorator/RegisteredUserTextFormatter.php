<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Decorator;

use Delvesoft\User\Entity\RegisteredUser;
use Delvesoft\User\Value\FormatType;

class RegisteredUserTextFormatter implements RegisteredUserTextFormatterInterface
{
    /**
     * @param RegisteredUser $user
     * @param FormatType     $formatType
     *
     * @return string
     */
    public function formatText(RegisteredUser $user, FormatType $formatType): string
    {
        $output = '';
        if ($formatType->isFirstType()) {
            return $user->getName();
        }

        if ($formatType->isSecondType()) {
            $output .= $user->isMale() ? 'Pan ' : 'Pani ';
            $output .= $user->getName();

            return $output;
        }

        if ($formatType->isThirdType()) {
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

        if ($formatType->isFourthType()) {
            if ($user->wasRegisteredDuringChristmas()) {
                $output .= 'Stastne a vesele vianoce ';
            } elseif ($user->wasRegisteredDuringEaster()) {
                $output .= 'Veselu Velku Noc ';
            } else {
                $output .= 'Prijemny den ';
            }

            $output .= $user->isMale() ? 'Pan ' : 'Pani ';
            $output .= $user->getName();

            return $output;
        }

        if ($formatType->isFifthType()) {
            $output .= $user->isMale() ? 'Pan ' : 'Pani ';
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

        return $output;
    }
}