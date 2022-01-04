<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\Command;


use Delvesoft\Calculator\Calculator;

class PowCommand implements CommandInterface
{
    public function __construct(
        private int $a,
        private int $b,
        private Calculator $calculator
    ) {
    }

    public function execute(): bool
    {
        $result = pow($this->a, $this->b);
        $this->calculator->updateResult(
            $result
        );

        printf("^ operation result: [%s] %s", $result, PHP_EOL);

        return true;
    }
}
