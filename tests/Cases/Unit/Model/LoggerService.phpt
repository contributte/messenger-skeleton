<?php declare(strict_types = 1);

namespace Tests\Cases\Unit\Model;

use App\Model\LoggerService;
use Contributte\Tester\Environment;
use Contributte\Tester\Toolkit;
use Nette\Utils\Json;
use Tester\Assert;

require_once __DIR__ . '/../../../bootstrap.php';

Toolkit::test(function (): void {
	$logfile = Environment::getTestDir() . '/log.txt';
	$logger = new LoggerService($logfile);
	$logger->write('test');

	Assert::match('[{"date":%A%,"message":"test"}]', Json::encode($logger->list()));
});
