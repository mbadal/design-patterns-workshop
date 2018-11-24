<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\AbstractFactory;

use Delvesoft\Car\Component\Hood\HoodInterface;
use Delvesoft\Car\Component\Tire\TireInterface;

interface ComponentFactoryInterface
{
    /**
     * @return HoodInterface
     */
    public function createHood(): HoodInterface;

    /**
     * @return TireInterface
     */
    public function createTire(): TireInterface;
}