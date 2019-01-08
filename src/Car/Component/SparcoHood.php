<?php

declare(strict_types=1);

namespace Delvesoft\Car\Component;

class SparcoHood implements HoodInterface
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
        return "Hood of vendor: [{$this->getVendor()}]";
    }
}