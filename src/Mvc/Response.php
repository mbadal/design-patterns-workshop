<?php

declare(strict_types=1);

namespace Delvesoft\Mvc;

class Response
{
    private int $statusCode;

    private string $responseBody;

    private function __construct(int $statusCode, string $responseBody)
    {
        $this->statusCode   = $statusCode;
        $this->responseBody = $responseBody;
    }

    public static function createFromScalars(int $statusCode, string $responseBody): Response
    {
        return new self($statusCode, $responseBody);
    }

    public function __toString(): string
    {
        return "Response with status: [{$this->statusCode}] and content: [{$this->responseBody}]";
    }
}
