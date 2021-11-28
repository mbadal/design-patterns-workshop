<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\ChainOfResponsibility;


class LockTheDoor2Step extends AbstractStepWithFinalCheck
{
    public function process(HouseLeavingRequestWithFinalCheck $request): void
    {
        if ($request->areAllParametersSet()) {
            printf('Locking the door%s', PHP_EOL);

            $this->processNext($request);
        } else {
            printf('Door was not locked, missing required steps%s', PHP_EOL);

            throw new \LogicException();
        }
    }
}
