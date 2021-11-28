<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\ChainOfResponsibility;


class LockTheDoor2Step extends AbstractStepWithFinalCheck
{
    public function process(HouseLeavingRequestWithFinalCheck $request): void
    {
        printf('Locking the door%s', PHP_EOL);
    }
}
