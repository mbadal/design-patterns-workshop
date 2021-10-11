<?php

declare(strict_types=1);

namespace Delvesoft\Car\Component;

class SparcoHood implements ComponentInterface
{
    public function getVendor(): string
    {
        return 'Sparco';
    }

    public function getFullName(): string
    {
        return "Hood of vendor: [{$this->getVendor()}]";
    }
}
