<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\AbstractFactory;

use Delvesoft\Car\Component\Hood\HoodInterface;
use Delvesoft\Car\Component\Tire\TireInterface;

interface ComponentFactoryInterface
{
    public function createHood(): HoodInterface;
    public function createTire(): TireInterface;
}
