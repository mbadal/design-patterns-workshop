<?php

declare(strict_types=1);

namespace Delvesoft\DocumentConvertor;

use Delvesoft\DocumentConvertor\ValueObject\Url;

class DocumentDownloader
{
    /**
     * @param Url $url
     *
     * @return string
     */
    public function downloadDocument(Url $url): string
    {
        printf("Downloading document from: [{$url}]\n");
        return "Testing document";
    }
}