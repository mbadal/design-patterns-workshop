<?php

declare(strict_types=1);

namespace Delvesoft\Car\Component\Tire;

use Delvesoft\Car\Component\Vendor\NameEnum;

class SparcoTire implements TireInterface
{
    /**
     * @return string
     */
    public function getVendor(): string
    {
        return NameEnum::NAME_SPARCO;
    }

}