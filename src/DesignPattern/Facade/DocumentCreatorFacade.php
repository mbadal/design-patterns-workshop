<?php

declare(strict_types=1);

namespace Delvesoft\DesignPattern\Facade;

use Delvesoft\DocumentConvertor\Compressor;
use Delvesoft\DocumentConvertor\ConvertorRegistry;
use Delvesoft\DocumentConvertor\DocumentDownloader;
use Delvesoft\DocumentConvertor\DocumentSaver;
use Delvesoft\DocumentConvertor\ValueObject\DocumentFormat;
use Delvesoft\DocumentConvertor\ValueObject\Url;

class DocumentCreatorFacade
{
    /** @var DocumentDownloader */
    private $downloader;

    /** @var ConvertorRegistry */
    private $registry;

    /** @var Compressor */
    private $compressor;

    /** @var DocumentSaver */
    private $saver;

    /**
     * @param DocumentDownloader $downloader
     * @param ConvertorRegistry  $registry
     * @param Compressor         $compressor
     * @param DocumentSaver      $saver
     */
    public function __construct(DocumentDownloader $downloader, ConvertorRegistry $registry, Compressor $compressor, DocumentSaver $saver)
    {
        $this->downloader = $downloader;
        $this->registry   = $registry;
        $this->compressor = $compressor;
        $this->saver      = $saver;
    }

    /**
     * @param Url            $documentSource
     * @param DocumentFormat $format
     * @param string         $savePath
     * @param string         $title
     * @param bool           $useCompression
     */
    public function downloadConvertAndSaveDocumentWithCompression(
        Url $documentSource,
        DocumentFormat $format,
        string $savePath,
        string $title,
        bool $useCompression = true
    ) {
        $documentContents = $this->downloader->downloadDocument(
            $documentSource
        );

        $document = $this->registry->convertDocument($documentContents, $format);
        if ($useCompression) {
            $document = $this->compressor->compressDocument($document);
        }

        $this->saver->save($document, $savePath, $title);
    }
}