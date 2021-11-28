<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\ChainOfResponsibility;


abstract class AbstractStepWithFinalCheck
{
    private ?AbstractStep $next = null;

    public function setNext(AbstractStep $next): self
    {
        $this->next = $next;

        return $this;
    }

    public abstract function process(HouseLeavingRequestWithFinalCheck $request): void;

    protected function hasNext(): bool
    {
        return ($this->next !== null);
    }

    protected function getNext(): ?AbstractStep
    {
        return $this->next;
    }
}
