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

    public function __construct()
    {
        $this->channel = Channel::createFromInteger(1);
        $this->volume  = Volume::createFromInteger(10);
    }

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
    public function getVolume(): int
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
        printf("Setting volume on TV to %s\n", $volumeToSet);
        $this->volume = $this->volume->setVolume($volumeToSet);
        printf("Actual volume on TV: [%s]\n", $this->volume->getVolume());
    }

    /**
     * @param int $channelNumber
     */
    public function setChannel(int $channelNumber)
    {
        printf("Setting channel on TV to %s\n", $channelNumber);
        $this->channel = $this->channel->changeChannel($channelNumber);
        printf("Actual channel on TV: [%s]\n", $this->channel->getChannel());
    }
}