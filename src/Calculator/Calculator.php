<?php

declare(strict_types=1);


namespace Delvesoft\Calculator;


use Delvesoft\DesignPattern\Command\CommandInterface;

class Calculator
{
    private int $result;

    public function updateResult(int $number): void
    {
        $this->result = $number;
    }

    public function executeCommand(CommandInterface $command): bool
    {
        return $command->execute();
    }
}
