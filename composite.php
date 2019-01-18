<?php

declare(strict_types=1);

use Delvesoft\FileSystem\File;
use Delvesoft\FileSystem\Folder;

require 'vendor/autoload.php';

/**
 * Instrukcie:
 *  - V balicku 'Delvesoft\FileSystem' je implementovany zaklad zjednoduseneho UNIX-oveho file systemu
 *  - Obsahuje 2 prvky:
 *      - FileAbstract
 *      - FolderAbstract
 *  - Z tychto komponentov je vytvorena nasledovna suborova struktura:
 *
 *                                      root
 *                                      |  \
 *                              folder11    file11
 *                             |   |    \
 *                     folder21 folder22 file21
 *                     |
 *                folder31
 *               |    |    \
 *       folder41 folder42  file41
 *
 *  - V balicku 'Delvesoft\DesignPattern\Composite' je abstraktna trieda 'TreeRootAbstract'
 *  - Poziadavky:
 *      - Vytvorte implementaciu TreeRoot, ktora bude schopna (v balicku 'Delvesoft\DesignPattern\Composite'):
 *          - vypisat postupne celu strukturu suboroveho systemu (metoda 'printTreeStructure')
 *          - na vypisanie celej struktury MUSI!!! stacit jedno zavolanie metody 'printTreeStructure' nad TreeRoot
 * dany INode)
 */

$folder41 = new Folder('folder41');
$folder42 = new Folder('folder42');
$file41   = new File('file41');
$folder31 = new Folder('folder31');
$folder31->addChild($folder41)->addChild($folder42)->addChild($file41);

$folder21 = new Folder('folder21');
$folder21->addChild($folder31);
$folder22 = new Folder('folder22');
$file21   = new File('file21');
$folder11 = new Folder('folder11');
$folder11->addChild($folder21)->addChild($folder22)->addChild($file21);
$file11     = new File('file11');
$rootFolder = new Folder('root');
$rootFolder->addChild($folder11)->addChild($file11);

/**
 * @todo
 * $treeRoot = new TreeRoot($rootFolder);
 * $treeRoot->printTreeStructure();
 *
 */