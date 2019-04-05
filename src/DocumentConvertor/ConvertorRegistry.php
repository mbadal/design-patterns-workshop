<?php

declare(strict_types=1);

namespace Delvesoft\DocumentConvertor;

use Delvesoft\DocumentConvertor\Dto\Document;
use Delvesoft\DocumentConvertor\ValueObject\DocumentFormat;
use InvalidArgumentException;

class ConvertorRegistry
{
    /** @var ConvertorInterface[] */
    private $convertors = [];

    /**
     * @param ConvertorInterface $convertor
     *
     * @return ConvertorRegistry
     */
    public function registerConvertor(ConvertorInterface $convertor): ConvertorRegistry
    {
        $this->convertors[$convertor->getFormat()->__toString()] = $convertor;

        return $this;
    }

    public function convertDocument(string $contents, DocumentFormat $documentFormat): Document
    {
        $key = $documentFormat->__toString();
        if (!isset($this->convertors[$key])) {
            throw new InvalidArgumentException("Convertor with key: [{$key}] is not registered");
        }

        return $this->convertors[$key]->convert($contents);
    }
}