<?php

declare(strict_types=1);

namespace Delvesoft\Car\Component;

class RacingTire implements ComponentInterface
{
    public function getVendor(): string
    {
        return 'Racing';
    }

    public function getFullName(): string
    {
        return "Tire of vendor: [{$this->getVendor()}]";
    }
}
