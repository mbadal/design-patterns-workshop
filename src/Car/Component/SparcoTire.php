<?php

declare(strict_types=1);

namespace Delvesoft\Car\Component\Tire;

use Delvesoft\Car\Component\TireInterface;

class SparcoTire implements TireInterface
{
    /**
     * @return string
     */
    public function getVendor(): string
    {
        return 'Sparco';
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return "Tire of vendor: [{$this->getVendor()}]";
    }
}