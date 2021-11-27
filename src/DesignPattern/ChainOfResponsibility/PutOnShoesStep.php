<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\ChainOfResponsibility;


class PutOnShoesStep extends AbstractStep
{
    public function process(): void
    {
        printf('Putting on shoes%s', PHP_EOL);

        if ($this->hasNext() === false) {
            return;
        }

        $this->getNext()->process();
    }
}
