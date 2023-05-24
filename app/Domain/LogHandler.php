<?php declare(strict_types = 1);

namespace App\Domain;

use App\Model\LoggerService;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
final class LogHandler
{

	public function __construct(
		private LoggerService $logger
	)
	{
	}

	public function __invoke(LogMessage $message): void
	{
		$this->logger->write($message->text);
	}

}
