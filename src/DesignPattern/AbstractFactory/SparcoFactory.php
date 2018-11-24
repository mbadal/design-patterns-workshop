<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\AbstractFactory;

use Delvesoft\Car\Component\Hood\HoodInterface;
use Delvesoft\Car\Component\Hood\SparcoHood;
use Delvesoft\Car\Component\Tire\SparcoTire;
use Delvesoft\Car\Component\Tire\TireInterface;

class SparcoFactory implements ComponentFactoryInterface
{
    /**
     * @return HoodInterface
     */
    public function createHood(): HoodInterface
    {
        return new SparcoHood();
    }

    /**
     * @return TireInterface
     */
    public function createTire(): TireInterface
    {
        return new SparcoTire();
    }
}