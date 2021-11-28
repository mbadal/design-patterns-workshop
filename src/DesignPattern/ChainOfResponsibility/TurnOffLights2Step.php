<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\ChainOfResponsibility;


class TurnOffLights2Step extends AbstractStepWithFinalCheck
{
    public function process(HouseLeavingRequestWithFinalCheck $request): void
    {
        printf('Turning off the lights%s', PHP_EOL);

        $this->processNext(
            new HouseLeavingRequestWithFinalCheck(
                true,
                $request->isDidYouPutOnClothes(),
                $request->isDidYouPutOnShoes()
            )
        );
    }
}
