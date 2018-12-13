<?php

declare(strict_types=1);

namespace Delvesoft\Home;

use Delvesoft\Home\Value\Channel;
use Delvesoft\Home\Value\Volume;

class Television
{
    /** @var bool */
    private $isEnabled = false;

    /** @var Volume */
    private $volume;

    /** @var Channel */
    private $channel;

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->isEnabled;
    }

    public function enable()
    {
        $this->isEnabled = true;
    }

    public function disable()
    {
        $this->isEnabled = false;
    }

    /**
     * @return int
     */
    public function geVolume(): int
    {
        return $this->volume->getVolume();
    }

    /**
     * @return int
     */
    public function getChannel(): int
    {
        return $this->channel->getChannel();
    }

    /**
     * @param int $volumeToSet
     */
    public function setVolume(int $volumeToSet)
    {
        $this->volume = $this->volume->setVolume($volumeToSet);
    }

    /**
     * @param int $channelToChange
     */
    public function setChannel(int $channelToChange)
    {
        $this->channel = $this->channel->changeChannel($channelToChange);
    }
}