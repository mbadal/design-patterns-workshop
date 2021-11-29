<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\ChainOfResponsibility;


class LoginRequest
{
    public function __construct(
        private string $login,
        private string $rawPassword,
        private ?ResolverToUse $override = null

    ) {
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function getRawPassword(): string
    {
        return $this->rawPassword;
    }

    public function isOverridden(): bool
    {
        return ($this->override !== null);
    }

    public function getOverride(): ?ResolverToUse
    {
        return $this->override;
    }
}
