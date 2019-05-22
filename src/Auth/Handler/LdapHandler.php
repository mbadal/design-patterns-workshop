<?php declare(strict_types=1);

namespace Delvesoft\Auth\Handler;

use Delvesoft\Auth\Entity\User;
use Delvesoft\Auth\Handler\Exception\AuthenticationFailedException;
use Delvesoft\Auth\ValueObject\Login;
use Delvesoft\Auth\ValueObject\PlainTextPassword;
use Delvesoft\Auth\ValueObject\Url;

class LdapHandler
{
    /** @var Url */
    private $host;

    /** @var bool */
    private $shouldSuccess;

    /**
     * @param Url  $host
     * @param bool $shouldSuccess
     */
    public function __construct(Url $host, bool $shouldSuccess)
    {
        $this->host          = $host;
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
        //@todo should be replaced by LDAP auth
        if (!$this->shouldSuccess) {
            throw new AuthenticationFailedException("User: [{$login}] could not be authenticated");
        }

        return new User($login);
    }
}