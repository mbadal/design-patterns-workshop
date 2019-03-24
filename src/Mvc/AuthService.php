<?php

declare(strict_types=1);

namespace Delvesoft\Mvc;

class AuthService
{
    /**
     * @param bool $flag
     *
     * @return bool
     */
    public function isUserAuthenticated(bool $flag = false): bool
    {
        return $flag;
    }
}