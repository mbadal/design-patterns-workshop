<?php

declare(strict_types=1);


namespace Delvesoft\Home;


class HouseLeavingProcedure
{
    public function process(): void
    {
        //put on clothes
        printf('Putting on clothes%s', PHP_EOL);

        //turn off the lights
        printf('Turning off the lights%s', PHP_EOL);

        //put on shoes
        printf('Putting on shoes%s', PHP_EOL);

        //lock the door
        printf('Locking the door%s', PHP_EOL);
    }
}
