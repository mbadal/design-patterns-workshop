<?php

declare(strict_types=1);

namespace Delvesoft\Home;

interface DeviceInterface
{
    /**
     * @return bool
     */
    public function isEnabled(): bool;

    public function enable();

    public function disable();

    /**
     * @return int
     */
    public function getChannel(): int;

    /**
     * @param int $channel
     */
    public function setChannel(int $channel);

    /**
     * @return int
     */
    public function getVolume(): int;

    /**
     * @param int $volume
     */
    public function setVolume(int $volume);
}