<?php declare(strict_types=1);

namespace Delvesoft\Auth\Handler;

use Delvesoft\Auth\Entity\User;
use Delvesoft\Auth\Handler\Exception\AuthenticationFailedException;
use Delvesoft\Auth\ValueObject\Login;
use Delvesoft\Auth\ValueObject\PlainTextPassword;

class OtherHandler
{
    /** @var bool */
    private $shouldSuccess;

    /**
     * @param bool $shouldSuccess
     */
    public function __construct(bool $shouldSuccess)
    {
        $this->shouldSuccess = $shouldSuccess;
    }

    /**
     * @param Login             $login
     * @param PlainTextPassword $password
     *
     * @return User
     * @throws AuthenticationFailedException
     */
    public function authenticate(Login $login, PlainTextPassword $password): User
    {
        if (!$this->shouldSuccess) {
            throw new AuthenticationFailedException("User: [{$login}] could not be authenticated");
        }

        return new User($login);
    }
}