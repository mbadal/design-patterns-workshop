# Design Patterns Workshop

## Project set up
Set up the project by running the commands:
```bash
cd ./docker
./ops up -d
```
After that, you can run PHP and bash scripts with the command:
```bash

#Run PHP scripts
./ops php

# OR

#Run ANY bash command
./ops bash

# OR

#Log in directly to container
./ops container bash
```

First, install the required dependencies (and dump autoload)
```bash
./ops composer install

# OR

./ops container bash
composer install  
```

## Author
Matej Bádal - matejbadal@gmail.com

## License
This project is licensed under the MIT License