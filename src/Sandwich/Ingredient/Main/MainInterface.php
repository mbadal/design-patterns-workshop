<?php

declare(strict_types=1);

namespace Delvesoft\Sandwich\Ingredient\Main;

interface MainInterface
{
    const TYPE_MEAT = 'meat';
    const TYPE_FISH = 'fish';

    /**
     * @return string
     */
    public function getMainType(): string;
}