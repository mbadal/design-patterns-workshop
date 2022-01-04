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
        $result = ($this->a * $this->a);
        $this->calculator->updateResult(
            $result
        );

        printf("^2 operation result: [%s] %s", $result, PHP_EOL);

        return true;
    }
}
