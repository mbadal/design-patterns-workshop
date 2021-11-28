<?php

declare(strict_types=1);


namespace Delvesoft\DesignPattern\ChainOfResponsibility;


class HouseLeavingRequestWithFinalCheck
{
    private bool $areLightsTurnedOff;
    private bool $didYouPutOnClothes;
    private bool $didYouPutOnShoes;

    public function __construct(bool $areLightsTurnedOff, bool $didYouPutOnClothes, bool $didYouPutOnShoes)
    {
        $this->areLightsTurnedOff = $areLightsTurnedOff;
        $this->didYouPutOnClothes = $didYouPutOnClothes;
        $this->didYouPutOnShoes   = $didYouPutOnShoes;
    }

    public function isAreLightsTurnedOff(): bool
    {
        return $this->areLightsTurnedOff;
    }

    public function isDidYouPutOnClothes(): bool
    {
        return $this->didYouPutOnClothes;
    }

    public function isDidYouPutOnShoes(): bool
    {
        return $this->didYouPutOnShoes;
    }
}
