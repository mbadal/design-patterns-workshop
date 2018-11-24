<?php

declare(strict_types=1);

namespace Delvesoft\User\Value;

class Name
{
    /** @var string */
    private $name;

    /**
     * @param string $name
     */
    private function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param string $name
     *
     * @return Name
     */
    public static function createFromString(string $name): Name
    {
        return new self($name);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}