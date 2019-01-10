<?php

declare(strict_types=1);

namespace Delvesoft\Car\Component\Hood;

use Delvesoft\Car\Component\VendorName\NameEnum;

class RacingHood implements HoodInterface
{
    /**
     * @return string
     */
    public function getVendor(): string
    {
        return NameEnum::NAME_RACING;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return "Hood of vendor: [{$this->getVendor()}]";
    }
}
