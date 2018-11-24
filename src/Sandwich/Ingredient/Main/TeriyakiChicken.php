<?php

declare(strict_types=1);

namespace Delvesoft\Sandwich\Ingredient\Main;

class TeriyakiChicken implements MainInterface
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Teriyaki chicken';
    }
}