<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\ChainOfResponsibility;


class PutOnShoes2Step extends AbstractStepWithFinalCheck
{
    public function process(HouseLeavingRequestWithFinalCheck $request): void
    {
        printf('Putting on shoes%s', PHP_EOL);

        $this->processNext(
            new HouseLeavingRequestWithFinalCheck(
                $request->isAreLightsTurnedOff(),
                $request->isDidYouPutOnClothes(),
                true
            )
        );
    }
}
