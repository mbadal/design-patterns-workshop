<?php

declare(strict_types=1);

namespace Delvesoft\Fixtures;

use Delvesoft\DesignPattern\Decorator\FixtureLoaderInterface;

class FixtureLoader implements FixtureLoaderInterface
{
    public function loadFixtures()
    {
        $this->loadFixturesByDefinition();
    }

    private function loadFixturesByDefinition()
    {
        printf("Loading fixtures\n");
    }
}