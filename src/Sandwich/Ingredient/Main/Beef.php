<?php

declare(strict_types=1);

namespace Delvesoft\Sandwich\Ingredient\Main;

class Beef implements MainInterface
{
    public function getName(): string
    {
        return 'Beef';
    }
}
