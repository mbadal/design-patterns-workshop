<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\Command;


use Delvesoft\Calculator\Calculator;

class SquareCommand implements CommandInterface
{
    public function __construct(
        private int $a,
        private Calculator $calculator
    )
    {

    }

    public function execute(): bool
    {
        $this->calculator->updateResult(
            $this->a * $this->a
        );

        return true;
    }
}
