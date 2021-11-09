<?php

declare(strict_types=1);

namespace Delvesoft\Home\Device;

class Television implements DeviceInterface
{
    private bool $isEnabled = false;
    private int $volume;
    private int $channel;

    public function __construct()
    {
        $this->channel = 1;
        $this->volume  = 10;
    }

    public function isEnabled(): bool
    {
        return $this->isEnabled;
    }

    public function enable(): void
    {
        printf("Toggling TV on\n");
        $this->isEnabled = true;
    }

    public function disable(): void
    {
        printf("Toggling TV off\n");
        $this->isEnabled = false;
    }

    public function getVolume(): int
    {
        return $this->volume;
    }

    public function getChannel(): int
    {
        return $this->channel;
    }

    public function setVolume(int $volumeToSet): void
    {
        printf("Setting volume on TV to %s\n", $volumeToSet);
        $this->volume = $volumeToSet;
    }

    public function setChannel(int $channelNumber): void
    {
        printf("Setting channel on TV to %s\n", $channelNumber);
        $this->channel = $channelNumber;
    }
}
