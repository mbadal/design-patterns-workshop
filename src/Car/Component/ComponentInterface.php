<?php

declare(strict_types=1);

namespace Delvesoft\Car\Component;

interface ComponentInterface
{
    /**
     * @return string
     */
    public function getVendor(): string;

    /**
     * @return string
     */
    public function getFullName(): string;
}