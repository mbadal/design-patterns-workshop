<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\ChainOfResponsibility;


class LoginRequest
{
    public function __construct(
        private string $login,
        private string $rawPassword

    ) {}

    public function getLogin(): string
    {
        return $this->login;
    }

    public function getRawPassword(): string
    {
        return $this->rawPassword;
    }
}
