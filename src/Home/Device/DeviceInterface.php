<?php

declare(strict_types=1);


namespace Delvesoft\Home\Device;


interface DeviceInterface
{
    public function isEnabled(): bool;

    public function enable(): void;

    public function disable(): void;

    public function getVolume(): int;

    public function getChannel(): int;

    public function setVolume(int $volumeToSet): void;

    public function setChannel(int $channelCode): void;
}
