<?php

declare(strict_types=1);

namespace Delvesoft\Home\Value;

use RuntimeException;

class Volume
{
    /** @var int */
    private $value = 0;

    /**
     * @param int $value
     */
    private function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * @param int $volume
     *
     * @return Volume
     */
    public static function createFromInteger(int $volume): Volume
    {
        if ($volume < 0 || 100 < $volume) {
            throw new RuntimeException("Bad volume value passed in");
        }

        return new self($volume);
    }

    /**
     * @param int $volume
     *
     * @return Volume
     */
    public function setVolume(int $volume)
    {
        if ($volume > 100) {
            $volume = 100;
        } elseif ($volume < 0) {
            $volume = 0;
        }

        return static::createFromInteger($volume);
    }

    /**
     * @return int
     */
    public function getVolume(): int
    {
        return $this->value;
    }
}