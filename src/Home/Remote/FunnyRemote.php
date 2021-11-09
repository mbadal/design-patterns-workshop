<?php

declare(strict_types=1);


namespace Delvesoft\Home\Remote;


use Delvesoft\Home\Device\DeviceInterface;

class FunnyRemote implements FunnyRemoteInterface
{
    private DeviceInterface $device;

    public function __construct(DeviceInterface $device)
    {
        $this->device = $device;
    }

    public function togglePower(): void
    {
        if ($this->device->isEnabled()) {
            $this->device->disable();
        } else {
            $this->device->enable();
        }
    }

    public function volumeUp(): void
    {
        $volume = $this->device->getVolume();
        $this->device->setVolume($volume + 1);
    }

    public function volumeDown(): void
    {
        $volume = $this->device->getVolume();
        $this->device->setVolume($volume - 1);
    }

    public function channelUp(): void
    {
        $channel = $this->device->getChannel();
        $this->device->setChannel($channel + 1);
    }

    public function channelDown(): void
    {
        $channel = $this->device->getChannel();
        $this->device->setChannel($channel - 1);
    }

    public function specialChannelUp(): void
    {
        $channel = $this->device->getChannel();
        $this->device->setChannel($channel + 10);
    }

    public function specialChannelDown(): void
    {
        $channel = $this->device->getChannel();
        $this->device->setChannel($channel - 4);
    }
}
