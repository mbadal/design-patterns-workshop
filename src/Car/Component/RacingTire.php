<?php

declare(strict_types=1);

namespace Delvesoft\Car\Component\Tire;

use Delvesoft\Car\Component\ComponentInterface;

class RacingTire implements ComponentInterface
{
    /**
     * @return string
     */
    public function getVendor(): string
    {
        return 'Racing';
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return "Tire of vendor: [{$this->getVendor()}]";
    }
}