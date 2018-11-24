<?php

declare(strict_types=1);

namespace Delvesoft\Car\Component\Hood;

use Delvesoft\Car\Component\Vendor\NameEnum;

class SparcoHood implements HoodInterface
{
    /**
     * @return string
     */
    public function getVendor(): string
    {
        return NameEnum::NAME_SPARCO;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return "Hood of vendor: [{$this->getVendor()}]";
    }
}