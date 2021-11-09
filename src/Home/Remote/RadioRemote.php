<?php

declare(strict_types=1);


namespace Delvesoft\Home\Remote;


use Delvesoft\Home\Device\Radio;

class RadioRemote implements RemoteInterface
{
    private Radio $radio;

    public function __construct(Radio $radio)
    {
        $this->radio = $radio;
    }

    public function togglePower(): void
    {
        if ($this->radio->isEnabled()) {
            $this->radio->disable();
        } else {
            $this->radio->enable();
        }
    }

    public function volumeUp(): void
    {
        $volume = $this->radio->getVolume();
        $this->radio->setVolume($volume + 1);
    }

    public function volumeDown(): void
    {
        $volume = $this->radio->getVolume();
        $this->radio->setVolume($volume - 1);
    }

    public function channelUp(): void
    {
        $channel = $this->radio->getChannel();
        $this->radio->setChannel($channel + 1);
    }

    public function channelDown(): void
    {
        $channel = $this->radio->getChannel();
        $this->radio->setChannel($channel - 1);
    }
}
