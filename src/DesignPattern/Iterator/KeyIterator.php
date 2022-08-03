<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\Iterator;


class KeyIterator implements \Iterator
{
    private int $index;
    private array $orderedKeys;

    public function __construct(
        private array $items
    ) {
        $keys = array_keys($this->items);

        usort($keys, function (string $a, string $b) {
            $firstLength  = strlen($a);
            $secondLength = strlen($b);

            if ($firstLength < $secondLength) {
                return -1;
            }

            if ($firstLength > $secondLength) {
                return 1;
            }

            return strcmp($a, $b);
        });

        $this->orderedKeys = $keys;
    }

    public function current(): mixed
    {
        return $this->items[$this->orderedKeys[$this->index]];
    }

    public function next(): void
    {
        $this->index++;
    }

    public function key(): string
    {
        return $this->orderedKeys[$this->index];
    }

    public function valid(): bool
    {
        return (array_key_exists($this->index, $this->orderedKeys));
    }

    public function rewind(): void
    {
        $this->index = 0;
    }
}
