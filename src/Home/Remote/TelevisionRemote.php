<?php

declare(strict_types=1);


namespace Delvesoft\Home\Remote;

use Delvesoft\Home\Device\Television;

class TelevisionRemote implements RemoteInterface
{
    private Television $television;

    public function __construct(Television $television)
    {
        $this->television = $television;
    }

    public function togglePower(): void
    {
        if ($this->television->isEnabled()) {
            $this->television->disable();
        } else {
            $this->television->enable();
        }
    }

    public function volumeUp(): void
    {
        $volume = $this->television->getVolume();
        $this->television->setVolume($volume + 1);
    }

    public function volumeDown(): void
    {
        $volume = $this->television->getVolume();
        $this->television->setVolume($volume - 1);
    }

    public function channelUp(): void
    {
        $channel = $this->television->getChannel();
        $this->television->setChannel($channel + 1);
    }

    public function channelDown(): void
    {
        $channel = $this->television->getChannel();
        $this->television->setChannel($channel - 1);
    }
}
