<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\ChainOfResponsibility;


class ResolverToUse
{
    public const RESOLVER_LOCAL = 'local';
    public const RESOLVER_LDAP  = 'ldap';

    private string $resolver;

    private function __construct(string $resolver)
    {
        $this->resolver = $resolver;
    }

    public static function createLocal(): ResolverToUse
    {
        return new self(
            self::RESOLVER_LOCAL
        );
    }

    public static function createLdap(): ResolverToUse
    {
        return new self(
            self::RESOLVER_LDAP
        );
    }

    public function isOfType(string $valueToCompare): bool
    {
        return ($this->resolver === $valueToCompare);
    }
}
