<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\ChainOfResponsibility;


abstract class AbstractStepWithFinalCheck
{
    private ?AbstractStepWithFinalCheck $next = null;

    public function setNext(AbstractStepWithFinalCheck $next): self
    {
        $this->next = $next;

        return $this;
    }

    public abstract function process(HouseLeavingRequestWithFinalCheck $request): void;

    protected function processNext(HouseLeavingRequestWithFinalCheck $request): void
    {
        if ($this->next === null) {
            return;
        }

        $this->next->process($request);
    }
}
