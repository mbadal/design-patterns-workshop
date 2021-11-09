<?php

declare(strict_types=1);


namespace Delvesoft\Home\Remote;


interface MutableRemoteInterface extends RemoteInterface
{
    public function mute(): void;
}
