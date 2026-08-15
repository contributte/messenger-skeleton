# Messenger Skeleton

Example Nette application integrating Symfony Messenger through `contributte/messenger`.

## Requirements

- PHP 8.4+
- [Composer](https://getcomposer.org/)
- PostgreSQL 15 and Redis 7 for the configured Doctrine and Redis transports

## Create a project

```bash
composer create-project -s dev contributte/messenger-skeleton acme
cd acme
make project
make init
```

`make project` installs dependencies and prepares writable runtime directories. `make init` creates `config/local.neon` for local parameter and service overrides.

## Native services

For a native setup, run PostgreSQL and Redis compatible with the checked-in configuration. PostgreSQL must be reachable on port `5432` with database `contributte`, user `postgres`, and password `contributte`. Redis must be reachable on port `6379` and require the password `contributte`.

## Docker Compose

The tracked Compose file starts the web application, PostgreSQL, Redis, and Adminer:

```bash
make docker-up
```

The web application is available at <http://localhost:8080> and Adminer at <http://localhost:8081>. PostgreSQL is exposed on `localhost:5432` with database `contributte`, user `postgres`, and password `contributte`; Redis is exposed on `localhost:6379` and requires password `contributte`.

## Development and consumer

Start the native PHP development server at <http://localhost:8000>:

```bash
make dev
```

The configured `App\Domain\LogMessage` messages are routed to the Redis transport. Consume them in a separate terminal:

```bash
make consume
```

This runs `bin/console messenger:consume redis` with Xdebug debugging environment variables.

## Quality checks

Run coding-standard and static-analysis checks:

```bash
make qa
```

Run tests:

```bash
make tests
```
