<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\ChainOfResponsibility;


class DressUpStep extends AbstractStep
{
    public function process(HouseLeavingRequest $request): void
    {
        printf('Putting on clothes%s', PHP_EOL);

        if ($this->hasNext() === false) {
            return;
        }

        $this->getNext()->process($request);
    }
}
