<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\ChainOfResponsibility;


class DressUp2Step extends AbstractStepWithFinalCheck
{
    public function process(HouseLeavingRequestWithFinalCheck $request): void
    {
        printf('Putting on clothes%s', PHP_EOL);

        $this->processNext(
            new HouseLeavingRequestWithFinalCheck(
                $request->isAreLightsTurnedOff(),
                true,
                $request->isDidYouPutOnShoes()
            )
        );
    }
}
