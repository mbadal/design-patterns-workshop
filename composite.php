<?php

declare(strict_types=1);

require 'vendor/autoload.php';

/**
 * Instrukcie:
 *  - V balicku 'Delvesoft\FileSystem' je implementovany zaklad zjednoduseneho UNIX-oveho file systemu
 *  - Obsahuje 2 prvky:
 *      - FileAbstract
 *      - FolderAbstract
 *  - Z tychto komponentov je vytvorena nasledovna suborova struktura:
 *  - V balicku 'Delvesoft\DesignPattern\Composite' je abstraktna trieda 'TreeRootAbstract'
 *  - Poziadavky:
 *      - Vytvorte konkretne implementacie pre File a Folder, dbajte na LSP (Liskov Substitution Principle)
 *      - Vytvorte implementaciu TreeRoot, ktora bude schopna:
 *          - vypisat postupne celu strukturu suboroveho systemu (metoda 'printTreeStructure')
 *          - vypisat cestu k INode-u (file, alebo folder) (metoda 'printInodePath'), ked mu ju podhodite (pouzite operator === na zistenie, ci ide o dany INode)
 */

/** @todo */
/* $treeRoot = new ... */
/* $treeRoot->printTreeStructure() */
/* $treeRoot->printInodePath() */