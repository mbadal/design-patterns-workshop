<?php

declare(strict_types=1);


namespace Delvesoft\Home\Remote;


interface FunnyRemoteInterface extends RemoteInterface
{
    public function specialChannelUp(): void;

    public function specialChannelDown(): void;
}
