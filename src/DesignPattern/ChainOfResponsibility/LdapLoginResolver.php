<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\ChainOfResponsibility;


class LdapLoginResolver extends AbstractLoginResolver
{
    public function resolve(LoginRequest $request): LoginResponse
    {
        if ($request->isOverridden() && $request->getOverride()->isOfType(ResolverToUse::RESOLVER_LOCAL)) {
            return $this->resolveNext(
                $request
            );
        }

        if ($request->getLogin() === 'user2@profesia.sk' || $request->getLogin() === 'user3@profesia.sk') {
            return new LoginResponse(
                true,
                $request->getLogin(),
                $request->isOverridden()
            );
        }

        return $this->resolveNext(
            $request
        );
    }
}
