<?php

declare(strict_types=1);

namespace Delvesoft\Home;

abstract class RemoteAbstract
{
    /** @var DeviceInterface */
    protected $device;

    /**
     * @param DeviceInterface $device
     */
    public function __construct(DeviceInterface $device)
    {
        $this->device = $device;
    }

    /**
     * @param DeviceInterface $device
     */
    public function setDevice(DeviceInterface $device)
    {
        $this->device = $device;
    }

    public function togglePower()
    {
        if (!$this->device->isEnabled()) {
            $this->device->enable();
        } else {
            $this->device->disable();
        }
    }

    public function volumeUp()
    {
        $this->device->setVolume($this->device->getVolume() + 1);
    }

    public function volumeDown()
    {
        $this->device->setVolume($this->device->getVolume() - 1);
    }

    public function channelUp()
    {
        $this->device->setChannel($this->device->getVolume() + 1);
    }

    public function channelDown()
    {
        $this->device->setChannel($this->device->getChannel() - 1);
    }
}