<?php

declare(strict_types=1);

namespace Delvesoft\Car\Component;

class SparcoHood implements ComponentInterface
{
    /**
     * @return string
     */
    public function getVendor(): string
    {
        return 'Sparco';
    }

}