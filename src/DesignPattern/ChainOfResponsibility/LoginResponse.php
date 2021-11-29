<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\ChainOfResponsibility;


class LoginResponse
{

    public function __construct(
        private bool $userFound = false
    )
    {}

    public function isUserFound(): bool
    {
        return $this->userFound;
    }
}
