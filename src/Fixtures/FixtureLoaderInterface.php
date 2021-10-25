<?php

declare(strict_types=1);


namespace Delvesoft\Fixtures;


interface FixtureLoaderInterface
{
    public function loadFixtures(): void;
}
