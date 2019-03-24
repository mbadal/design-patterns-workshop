<?php

declare(strict_types=1);

namespace Delvesoft\Mvc;

class Response
{
    /** @var int */
    private $statusCode;

    /** @var string */
    private $responseBody;

    /**
     * @param int    $statusCode
     * @param string $responseBody
     */
    private function __construct(int $statusCode, string $responseBody)
    {
        $this->statusCode   = $statusCode;
        $this->responseBody = $responseBody;
    }

    /**
     * @param int    $statusCode
     * @param string $responseBody
     *
     * @return Response
     */
    public static function createFromScalars(int $statusCode, string $responseBody): Response
    {
        return new self($statusCode, $responseBody);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "Response with status: [{$this->statusCode}] and content: [{$this->responseBody}]";
    }
}