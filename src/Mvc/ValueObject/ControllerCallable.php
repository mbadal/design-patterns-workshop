<?php

declare(strict_types=1);

namespace Delvesoft\Mvc\ValueObject;

use Delvesoft\Mvc\Response;
use RuntimeException;

class ControllerCallable
{
    /** @var object */
    private $object;

    /** @var string */
    private $action;

    /**
     * @param mixed  $object
     * @param string $action
     */
    private function __construct($object, string $action)
    {
        $this->object = $object;
        $this->action = $action;
    }

    /**
     * @param  object $object
     * @param string  $action
     *
     * @return ControllerCallable
     */
    public static function createFromScalars($object, string $action): ControllerCallable
    {
        if (!is_object($object)) {
            throw new RuntimeException("Argument: [{$object}] is not instantiated class");
        }

        return new self($object, $action);
    }

    /**
     * @return Response
     */
    public function call(): Response
    {
        return call_user_func([$this->object, $this->action]);
    }
}