<?php

declare(strict_types=1);

namespace Delvesoft\Home\Device;

class Television
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

    public function enable()
    {
        printf("Toggling TV on\n");
        $this->isEnabled = true;
    }

    public function disable()
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

    public function setVolume(int $volumeToSet)
    {
        printf("Setting volume on TV to %s\n", $volumeToSet);
        $this->volume = $volumeToSet;
    }

    public function setChannel(int $channelNumber)
    {
        printf("Setting channel on TV to %s\n", $channelNumber);
        $this->channel = $channelNumber;
    }
}
