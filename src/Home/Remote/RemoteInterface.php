<?php

declare(strict_types=1);


namespace Delvesoft\Home\Remote;


interface RemoteInterface
{
    public function togglePower(): void;

    public function volumeUp(): void;

    public function volumeDown(): void;

    public function channelUp(): void;

    public function channelDown(): void;
}
