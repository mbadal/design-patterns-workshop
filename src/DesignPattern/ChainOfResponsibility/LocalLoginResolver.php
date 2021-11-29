<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\ChainOfResponsibility;


class LocalLoginResolver extends AbstractLoginResolver
{
    public function resolve(LoginRequest $request): LoginResponse
    {
        if ($request->isOverridden() && $request->getOverride()->isOfType(ResolverToUse::RESOLVER_LOCAL)) {
            return $this->resolveNext(
                $request
            );
        }

        if ($request->getLogin() === 'user1@profesia.sk') {
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
