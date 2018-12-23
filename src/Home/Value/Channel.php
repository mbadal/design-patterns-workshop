<?php

declare(strict_types=1);

namespace Delvesoft\Home\Value;

use RuntimeException;

class Channel
{
    /** @var int */
    private $value;

    /**
     * @param int $value
     */
    private function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * @param int $channel
     *
     * @return Channel
     * @throws RuntimeException
     */
    public static function createFromInteger(int $channel): Channel
    {
        if ($channel < 1 || 10 < $channel) {
            throw new RuntimeException("Bad channel value passed in");
        }

        return new self($channel);
    }

    /**
     * @param int $channel
     *
     * @return Channel
     * @throws RuntimeException
     */
    public function changeChannel(int $channel): Channel
    {
        if ($channel > 10) {
            $channel = 1;
        } elseif ($channel < 0) {
            $channel = 10;
        }

        return static::createFromInteger($channel);
    }

    /**
     * @return int
     */
    public function getChannel(): int
    {
        return $this->value;
    }
}