<?php

declare(strict_types=1);


namespace Delvesoft\Calculator;


use Delvesoft\DesignPattern\Command\CommandInterface;

class Calculator
{
    private int $result;

    public function sum(int $a, int $b): bool
    {
        $this->result = ($a + $b);

        return true;
    }

    public function subtraction(int $a, int $b): bool
    {
        $this->result = ($a - $b);

        return true;
    }

    public function times(int $a, int $b): bool
    {
        $this->result = ($a * $b);

        return true;
    }

    public function square(int $a): bool
    {
        $this->result = ($a * $a);

        return true;
    }

    public function division(int $a, int $b): bool
    {
        if ($b === 0) {
            throw new \RuntimeException('Division by zero');
        }

        $this->result = ($a / $b);

        return true;
    }

    public function power(int $a, int $b): bool
    {
        $this->result = pow($a, $b);

        return true;
    }

    public function updateResult(int $number): void
    {
        $this->result = $number;
    }

    public function executeCommand(CommandInterface $command): bool
    {
        return $command->execute();
    }

    public function getResult(): int
    {
        return $this->result;
    }
}
