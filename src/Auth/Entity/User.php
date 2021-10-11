<?php declare(strict_types=1);

namespace Delvesoft\Auth\Entity;

use Delvesoft\Auth\ValueObject\Login;

class User
{
    /** @var Login */
    private $login;

    /**
     * @param Login $login
     */
    public function __construct(Login $login)
    {
        $this->login = $login;
    }
}