<?php declare(strict_types=1);

namespace Delvesoft\Profesia\EmailTemplate;

class EmailTemplate
{
    public function SetUserId(int $userId)
    {

    }

    public function SetEmailVars(array $variables)
    {

    }

    public function Send(string $emailAddress): bool
    {
        return true;
    }
}