<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\Facade;


use Delvesoft\DocumentConvertor\Compressor;
use Delvesoft\DocumentConvertor\ConvertorRegistry;
use Delvesoft\DocumentConvertor\DocumentDownloader;
use Delvesoft\DocumentConvertor\DocumentSaver;
use Delvesoft\DocumentConvertor\ValueObject\DocumentFormat;
use Delvesoft\DocumentConvertor\ValueObject\Url;

class DocumentConvertorFacade
{
    private DocumentDownloader $downloader;
    private ConvertorRegistry $registry;
    private Compressor $compressor;
    private DocumentSaver $saver;

    public function __construct(DocumentDownloader $downloader, ConvertorRegistry $registry, Compressor $compressor, DocumentSaver $saver)
    {
        $this->downloader = $downloader;
        $this->registry   = $registry;
        $this->compressor = $compressor;
        $this->saver      = $saver;
    }

    public function downloadConvertCompressAndSaveDocument(string $url, string $format, string $destinationPath, string $destinationTitle): void
    {
        $contents = $this->downloader->downloadDocument(
            Url::createFromString($url)
        );
        $pdf      = $this->registry->convertDocument(
            $contents,
            DocumentFormat::createFromString($format)
        );

        $pdf = $this->compressor->compressDocument($pdf);
        $this->saver->save($pdf, $destinationPath, $destinationTitle);
    }
}
