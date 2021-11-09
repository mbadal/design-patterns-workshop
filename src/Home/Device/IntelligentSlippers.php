<?php

declare(strict_types=1);


namespace Delvesoft\Home\Device;


class IntelligentSlippers implements DeviceInterface
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
        printf("Toggling Slippers on\n");
        $this->isEnabled = true;

    }

    public function disable(): void
    {
        printf("Toggling Slippers off\n");
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
        printf("Setting volume on Slippers to %s\n", $volumeToSet);
        $this->volume = $volumeToSet;
    }

    public function setChannel(int $channelCode): void
    {
        printf("Setting volume on Slippers to %s\n", $channelCode);
        $this->channel = $channelCode;
    }
}
