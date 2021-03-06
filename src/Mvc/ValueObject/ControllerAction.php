<?php

declare(strict_types=1);

namespace Delvesoft\Mvc\ValueObject;

use InvalidArgumentException;
use RuntimeException;

class ControllerAction
{
    /** @var string */
    private $key;

    /** @var string */
    private $method;

    /**
     * @param string $key
     * @param string $method
     */
    private function __construct(string $key, string $method)
    {
        $this->key    = $key;
        $this->method = $method;
    }

    /**
     * @param string $key
     * @param string $method
     *
     * @return ControllerAction
     */
    public static function createFromStrings(string $key, string $method): ControllerAction
    {
        if (!class_exists($key)) {
            throw new InvalidArgumentException("Argument: [{$key}] is not a valid container identifier");
        }

        return new self($key, $method);
    }

    /**
     * @param array $container
     *
     * @return ControllerCallable
     */
    public function instantiate(array $container): ControllerCallable
    {
        if (!isset($container[$this->key])) {
            throw new RuntimeException("Key: [{$this->key}] is not registered in container");
        }

        return ControllerCallable::createFromScalars(
            $container[$this->key],
            $this->method
        );
    }
}