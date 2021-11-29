<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\ChainOfResponsibility;


class LoginResponse
{

    public function __construct(
        private bool $userFound = false,
        private string $login,
        private bool $wasOverride = false
    )
    {}

    public function isUserFound(): bool
    {
        return $this->userFound;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function wasOverride(): bool
    {
        return $this->wasOverride;
    }
}
