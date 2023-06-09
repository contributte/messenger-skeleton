<?php

declare(strict_types = 1);

require __DIR__ . '/../vendor/autoload.php';

$configurator = App\Bootstrap::boot();

return $configurator->createContainer()->getByType(Doctrine\ORM\Decorator\EntityManagerDecorator::class);
