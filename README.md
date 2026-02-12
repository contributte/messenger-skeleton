![](https://heatbadger.now.sh/github/readme/contributte/messenger-skeleton/)

<p align=center>
  <a href="https://github.com/contributte/messenger-skeleton/actions"><img src="https://badgen.net/github/checks/contributte/messenger-skeleton/master"></a>
  <a href="https://codecov.io/gh/contributte/messenger-skeleton"><img src="https://badgen.net/codecov/c/github/contributte/messenger-skeleton"></a>
  <a href="https://packagist.org/packages/contributte/messenger-skeleton"><img src="https://badgen.net/packagist/dm/contributte/messenger-skeleton"></a>
  <a href="https://packagist.org/packages/contributte/messenger-skeleton"><img src="https://badgen.net/packagist/v/contributte/messenger-skeleton"></a>
</p>
<p align=center>
  <a href="https://packagist.org/packages/contributte/messenger-skeleton"><img src="https://badgen.net/packagist/php/contributte/messenger-skeleton"></a>
  <a href="https://github.com/contributte/messenger-skeleton"><img src="https://badgen.net/github/license/contributte/messenger-skeleton"></a>
  <a href="https://bit.ly/ctteg"><img src="https://badgen.net/badge/support/gitter/cyan"></a>
  <a href="https://bit.ly/cttfo"><img src="https://badgen.net/badge/support/forum/yellow"></a>
  <a href="https://contributte.org/partners.html"><img src="https://badgen.net/badge/sponsor/donations/F96854"></a>
</p>

<p align=center>
Website 🚀 <a href="https://contributte.org">contributte.org</a> | Contact 👨🏻‍💻 <a href="https://f3l1x.io">f3l1x.io</a> | Twitter 🐦 <a href="https://twitter.com/contributte">@contributte</a>
</p>

## Overview

This project demonstrates a first-class integration of Symfony Messenger into the Nette Framework. It provides a complete skeleton application showcasing asynchronous message handling, multiple transport configurations, and best practices for implementing message-based architectures.

### Key Features

- Built with PHP 8.4+
- Powered by Nette Framework packages
- Integrated Contributte packages
- Symfony Messenger integration with Redis transport
- Example of asynchronous message handling
- Docker-ready configuration
- Modern development setup with Composer

## Demo

<p align=center>
	<img src="https://github.com/contributte/messenger-skeleton/blob/master/.docs/assets/screenshot.png?raw=true">
	<img src="https://github.com/contributte/messenger-skeleton/blob/master/.docs/assets/console.png?raw=true">
</p>

## Getting Started

### Non-Docker Installation

1. Create a new project:
   ```bash
   composer create-project -s dev contributte/messenger-skeleton acme
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Start messenger consumer:
   ```bash
   make consume
   ```

4. Start PHP development server:
   ```bash
   make dev
   ```

5. Access the application at http://0.0.0.0:8000

### Docker Installation

1. Create a new project:
   ```bash
   composer create-project -s dev contributte/messenger-skeleton acme
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Start the application using Docker Compose:

    ```bash
    docker compose up
    ```

    To access the container for development tasks (e.g., `composer update`):

    ```bash
    docker compose run web bash
    ```

4. Access the application at http://0.0.0.0:8080

## Development

See [how to contribute](https://contributte.org/contributing.html) to this package.

This package is currently maintaining by these authors.

<a href="https://github.com/f3l1x">
    <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>

-----

Consider to [support](https://contributte.org/partners.html) **contributte** development team. Also thank you for using this project.
