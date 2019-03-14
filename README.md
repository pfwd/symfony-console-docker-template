# Symfony Console Template Within Docker

A template for Symfony console commands to be used within Docker containers

## Requirements
- Docker version 18.09.2, build 6247962
- docker-compose version 1.23.2, build 1110ad01
- docker-machine version 0.16.1, build cce350d7

## Install
```
$ docker-machine create symfony-console
$ docker-machine env symfony-console
$ eval $(docker-machine env symfony-console)
$ docker-compose up -d --build
```
## Examples

### Enter bash shell
```
$ docker-compose exec console bash
```

### List available commands
```
$ docker-compose exec console bin/console
```

### Run test command
```
$ docker-compose exec console bin/console app:test
```

### Delete container
```
$ docker-compose down
```

### Uninstall / Remove docker-machine
```
$ docker-machine stop symfony-console
$ docker-machine rm symfony-console
```

## Adding Commands

Create commands in src/App/Command and add them to `$application` in bin/console

For an example see src/App/Command/TestCommand.php