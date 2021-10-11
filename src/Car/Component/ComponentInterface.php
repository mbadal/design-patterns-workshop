<?php

declare(strict_types=1);

namespace Delvesoft\Car\Component;

interface ComponentInterface
{
    public function getVendor(): string;
    public function getFullName(): string;
}
