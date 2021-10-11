<?php

declare(strict_types=1);

namespace Delvesoft\Car\Component;

class RacingHood implements ComponentInterface
{
    public function getVendor(): string
    {
        return 'Racing';
    }

    public function getFullName(): string
    {
        return "Hood of vendor: [{$this->getVendor()}]";
    }
}
