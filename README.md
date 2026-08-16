# Messenger Skeleton

Example Nette application integrating Symfony Messenger through `contributte/messenger`.

## Requirements

- PHP 8.4+
- [Composer](https://getcomposer.org/)
- Docker Compose, PostgreSQL 15, and Redis 7 for the development-only examples below

## Create a project

```bash
composer create-project -s dev contributte/messenger-skeleton acme
cd acme
make project
make init
```

`make project` installs dependencies and prepares writable runtime directories. `make init` creates `config/local.neon` for local parameter and service overrides.

## Development-only native async quick start

The checked-in configuration connects to PostgreSQL and Redis at `0.0.0.0`. Start the tracked infrastructure services first:

```bash
docker compose up database redis
```

PostgreSQL is exposed on `localhost:5432` with database `contributte`, user `postgres`, and password `contributte`. Redis is exposed on `localhost:6379` and requires password `contributte`.

Start the native PHP application in a second terminal:

```bash
make dev
```

Then start the Redis consumer in a third terminal:

```bash
make consume
```

Finally, open <http://localhost:8000> and use **Send message [redis]**. It dispatches `App\Domain\LogMessage('Hello!')` to Redis. The consumer handles the message and appends a JSON line containing `"message":"Hello!"` to `var/tmp/messages.txt`.

## Development-only Compose stack

The tracked Compose file starts the web application alongside PostgreSQL, Redis, and Adminer:

```bash
make docker-up
```

The web application is available at <http://localhost:8080> and Adminer at <http://localhost:8081>. The checked-in Messenger and database DSNs use `0.0.0.0`, so use the native async flow above when running the consumer and dispatching messages from the application process.

## Quality checks

Run coding-standard and static-analysis checks:

```bash
make qa
```

Run tests:

```bash
make tests
```
