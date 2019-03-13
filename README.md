# Symfony Console Template Within Docker

A template for Symfony console commands to be used within Docker containers

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

Create commands in src/App/Command and add them to $application in bin/console

For an example see src/App/Command/TestCommand.php