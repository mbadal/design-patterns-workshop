<?php

declare(strict_types=1);

namespace Delvesoft\Car\Component;

class RacingHood implements HoodInterface
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
        return "Hood of vendor: [{$this->getVendor()}]";
    }
}