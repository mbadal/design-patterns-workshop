<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\ChainOfResponsibility;


abstract class AbstractLoginResolver
{
    private ?AbstractLoginResolver $next = null;

    abstract public function resolve(LoginRequest $request): LoginResponse;

    public function setNext(AbstractLoginResolver $next): AbstractLoginResolver
    {
        $this->next = $next;

        return $this;
    }

    protected function resolveNext(LoginRequest $request): LoginResponse
    {
        if ($this->next === null) {
            return new LoginResponse(
                false,
                $request->getLogin(),
                $request->isOverridden()
            );
        }

        return $this->next->resolve($request);
    }
}
