<?php

declare(strict_types=1);

namespace Delvesoft\Home;

class MutableRemote extends RemoteAbstract
{
    public function mute()
    {
        $this->device->setVolume(0);
    }
}