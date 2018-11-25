<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Decorator;

use Delvesoft\User\Entity\RegisteredUser;
use Delvesoft\User\Value\FormatType;

class FormatterRegistry
{
    /** @var RegisteredUserTextFormatterInterface[] */
    private $formatters = [];

    /**
     * @param FormatType                           $type
     * @param RegisteredUserTextFormatterInterface $formatter
     *
     * @return $this
     */
    public function registerFormatter(FormatType $type, RegisteredUserTextFormatterInterface $formatter)
    {
        $this->formatters[$type->getType()] = $formatter;

        return $this;
    }

    /**
     * @param FormatType     $type
     * @param RegisteredUser $registeredUser
     *
     * @return string
     */
    public function format(FormatType $type, RegisteredUser $registeredUser)
    {
        if (!isset($this->formatters[$type->getType()])) {
            throw new \InvalidArgumentException("Type: [{$type}] is not registered");
        }

        return $this->formatters[$type->getType()]->formatText($registeredUser);
    }
}