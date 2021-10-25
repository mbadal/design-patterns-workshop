<?php

declare(strict_types=1);

namespace Delvesoft\Formatter;

use Delvesoft\User\Entity\RegisteredUser;

class RegisteredUserTextFormatter
{
    public function formatText(RegisteredUser $user, bool $displayTitle = false, bool $displayTimeOfYear = false, bool $titleFirst = false): string
    {
        $output = $user->getName();

        $title = '';
        if ($displayTitle === true) {
            $title = $user->isMale() ? 'Pan': 'Pani';
        }

        $timeOfYear = '';
        if ($displayTimeOfYear === true) {
            if ($user->wasRegisteredDuringChristmas()) {
                $timeOfYear = 'Stastne a Vesele Vianoce';
            } elseif ($user->wasRegisteredDuringEaster()) {
                $timeOfYear = 'Prijemnu Velku noc';
            } else {
                $timeOfYear = 'Prijemny den';
            }
        }

        if ($titleFirst === true) {
            $output = "{$title} {$timeOfYear} {$output}";
        } else {
            $output = "{$timeOfYear} {$title} {$output}";
        }

        return trim($output);
    }
}
