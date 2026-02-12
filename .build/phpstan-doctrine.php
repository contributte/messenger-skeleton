<?php

declare(strict_types = 1);

require __DIR__ . '/../vendor/autoload.php';

$configurator = App\Bootstrap::boot();
$container = $configurator->createContainer();

try {
	return $container->getByType(Doctrine\ORM\Decorator\EntityManagerDecorator::class);
} catch (Nette\DI\MissingServiceException) {
	return $container->getByType(Doctrine\ORM\EntityManagerInterface::class);
}
