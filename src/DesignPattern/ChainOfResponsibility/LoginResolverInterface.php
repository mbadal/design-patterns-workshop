<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\ChainOfResponsibility;


interface LoginResolverInterface
{
    public function handle(LoginRequest $request): LoginResponse;
}
