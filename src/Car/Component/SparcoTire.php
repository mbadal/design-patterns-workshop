<?php

declare(strict_types=1);

namespace Delvesoft\Car\Component;

class SparcoTire implements ComponentInterface
{
    public function getVendor(): string
    {
        return 'Sparco';
    }

    public function getFullName(): string
    {
        return "Tire of vendor: [{$this->getVendor()}]";
    }
}
