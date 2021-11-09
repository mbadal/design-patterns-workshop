<?php

declare(strict_types=1);

namespace Delvesoft\Home\Device;

class Radio
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
        printf("Toggling Radio on\n");
        $this->isEnabled = true;

    }

    public function disable()
    {
        printf("Toggling Radio off\n");
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
        printf("Setting volume on Radio to %s\n", $volumeToSet);
        $this->volume = $volumeToSet;
    }

    public function setChannel(int $channelCode)
    {
        printf("Setting volume on Radio to %s\n", $channelCode);
        $this->channel = $channelCode;
    }
}
