<?php

declare(strict_types=1);

use Delvesoft\DesignPattern\Facade\DocumentCreatorFacade;
use Delvesoft\DocumentConvertor\Compressor;
use Delvesoft\DocumentConvertor\ConvertorRegistry;
use Delvesoft\DocumentConvertor\DocumentDownloader;
use Delvesoft\DocumentConvertor\DocumentSaver;
use Delvesoft\DocumentConvertor\PdfConvertor;
use Delvesoft\DocumentConvertor\ValueObject\DocumentFormat;
use Delvesoft\DocumentConvertor\ValueObject\Url;
use Delvesoft\DocumentConvertor\WordConvertor;

require 'vendor/autoload.php';

/**
 * Instrukcie:
 * - v balicku `Delvesoft\DocumentConvertor` su implementovane komponenty pre konverziu dokumentov
 *  - implementacia sa sklada zo 4 krokov:
 *      - stiahnutie dokumentu
 *      - konverzia na vystupny format
 *      - kompresia (volitelny krok)
 *      - ulozenie dokumentu
 *  - zjednoduste pomocou Facade patternu implemtaciu tak, aby bola lepsie znovupouzitelna
 *  - Vzorovy vystup:
 *      Downloading document from: [http://test1.url.sk]
 *      Converting document to PDF
 *      Compressing document
 *      Saving document with name: [testing-pdf] to destination: [/dev/null]
 *      Downloading document from: [http://test2.url.sk]
 *      Converting document to Word
 *      Compressing document
 *      Saving document with name: [testing-word] to destination: [/dev/null]
 */

$downloader = new DocumentDownloader();
$registry   = new ConvertorRegistry();
$registry
    ->registerConvertor(new PdfConvertor())
    ->registerConvertor(new WordConvertor());
$compressor = new Compressor();
$saver      = new DocumentSaver();
$facade     = new DocumentCreatorFacade(
    $downloader,
    $registry,
    $compressor,
    $saver
);

$facade->downloadConvertAndSaveDocumentWithCompression(
    Url::createFromString('http://test1.url.sk'),
    DocumentFormat::createPdfFormat(),
    '/dev/null',
    'testing-pdf',
    true
);
$facade->downloadConvertAndSaveDocumentWithCompression(
    Url::createFromString('http://test2.url.sk'),
    DocumentFormat::createWordFormat(),
    '/dev/null',
    'testing-word',
    true
);