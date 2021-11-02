<?php

declare(strict_types=1);

namespace Delvesoft\Mvc\ValueObject;

use Delvesoft\Mvc\Response;
use RuntimeException;

class ControllerCallable
{
    /** @var object */
    private object $object;

    /** @var string */
    private string $action;

    private function __construct($object, string $action)
    {
        $this->object = $object;
        $this->action = $action;
    }

    public static function createFromScalars($object, string $action): ControllerCallable
    {
        if (!is_object($object)) {
            throw new RuntimeException("Argument: [{$object}] is not instantiated class");
        }

        return new self($object, $action);
    }

    public function call(): Response
    {
        return call_user_func([$this->object, $this->action]);
    }
}
