<?php

declare(strict_types=1);


namespace Delvesoft\Calculator;


use Delvesoft\DesignPattern\Strategy\MathOperationInterface;

class Calculator
{
    /** @var MathOperationInterface[] */
    private array $operations = [];

    public function registerOperation(string $operationSign, MathOperationInterface $operation): self
    {
        $this->operations[$operationSign] = $operation;

        return $this;
    }

    public function compute(int $a, int $b, string $operation): int
    {
        if (array_key_exists($operation, $this->operations) === false) {
            throw new \RuntimeException('Unsupported operation');
        }

        return $this->operations[$operation]->compute($a, $b);
    }
}
