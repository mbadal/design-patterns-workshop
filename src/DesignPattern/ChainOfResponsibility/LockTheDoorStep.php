<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\ChainOfResponsibility;


class LockTheDoorStep extends AbstractStep
{
    public function process(): void
    {
        printf('Locking the door%s', PHP_EOL);

        if ($this->hasNext() === false) {
            return;
        }

        $this->getNext()->process();
    }

}
