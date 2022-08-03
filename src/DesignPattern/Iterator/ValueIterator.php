<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\Iterator;


class ValueIterator implements \Iterator
{
    private int $index;
    private array $orderedKeys;

    public function __construct(
        private array $items
    )
    {
        uasort($this->items, function (int $a, int $b) {
            if ($a < $b) {
                return 1;
            }

            if ($a > $b) {
                return -1;
            }

            return 0;
        });

        $this->orderedKeys = array_keys($this->items);
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
