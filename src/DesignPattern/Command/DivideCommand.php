<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\Command;


use Delvesoft\Calculator\Calculator;

class DivideCommand implements CommandInterface
{
    public function __construct(
        private int $a,
        private int $b,
        private Calculator $calculator
    )
    {

    }

    public function execute(): bool
    {
        if ($this->b === 0) {
            throw new \RuntimeException('Division by zero');
        }

        $result = ($this->a / $this->b);
        $this->calculator->updateResult(
            $this->a / $this->b
        );

        printf("/ operation result: [%s] %s", $result, PHP_EOL);

        return true;
    }
}
