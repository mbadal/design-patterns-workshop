<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';


/**
 * Instrukcie:
 *  - V subore sa nachadza "jednoducha" hash mapa - pole.
 *  - V balicku 'Delvesoft\DesignPattern\Iterator' implementujte:
 *      - KeyIterator
 *          - Iterator, ktory bude iterovat prvky hash mapy na zaklade lexikalnej dlzky kluca (najprv tie s najkratsim klucom).
 *          - V pripade zhodnej dlzky kluca pouzite funkciu `strcmp` a prvok s lexikalne "mensim" klucom sa vypise skor (usort)
 *      - ValueIterator
 *          - Iterator, ktory bude iterovat prvky podla velkosti hodnoty - od najvacsej po najmensiu (uasort)
 *  - Vystup:
 *      - KeyIterator:
 *          123
 *          13
 *          1
 *          12
 *          13
 *          29
 *          100
 *          65
 *          95
 *      - ValueIterator
 *          123
 *          100
 *          95
 *          65
 *          29
 *          13
 *          13
 *          12
 *          1
 */

$array =
    [
        'a'       => 123,
        'ab'      => 1,
        'abc'     => 12,
        'abd'     => 13,
        'x'       => 13,
        'abcde'   => 100,
        'abcdefg' => 95,
        'aefgh'   => 65,
        'xyz'     => 29,
    ];

/**$iterator = new ValueIterator(
    $array
);*/

/**foreach ($iterator as $item) {
    echo $item, PHP_EOL;
}*/
