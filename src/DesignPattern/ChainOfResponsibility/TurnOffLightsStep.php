<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\ChainOfResponsibility;


class TurnOffLightsStep extends AbstractStep
{
    public function process(): void
    {
        printf('Turning off the lights%s', PHP_EOL);

        if ($this->hasNext() === false) {
            return;
        }

        $this->getNext()->process();
    }

}
