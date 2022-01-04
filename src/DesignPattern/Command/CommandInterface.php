<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\Command;


interface CommandInterface
{
    public function execute(): bool;
}
