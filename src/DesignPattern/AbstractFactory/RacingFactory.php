<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\AbstractFactory;

use Delvesoft\Car\Component\Hood\HoodInterface;
use Delvesoft\Car\Component\Hood\RacingHood;
use Delvesoft\Car\Component\Tire\RacingTire;
use Delvesoft\Car\Component\Tire\TireInterface;

class RacingFactory implements ComponentFactoryInterface
{

    /**
     * @return HoodInterface
     */
    public function createHood(): HoodInterface
    {
        return new RacingHood();
    }

    /**
     * @return TireInterface
     */
    public function createTire(): TireInterface
    {
        return new RacingTire();
    }

}