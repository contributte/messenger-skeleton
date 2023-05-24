<?php declare(strict_types = 1);

namespace App\Model;

use Nette\Utils\FileSystem;
use Nette\Utils\Json;

final class LoggerService
{

	public function __construct(
		private string $file
	)
	{
	}

	public function write(string $message): void
	{
		FileSystem::createDir(dirname($this->file));
		file_put_contents($this->file, Json::encode(['date' => time(), 'message' => $message]), FILE_APPEND);
	}

	/**
	 * @return array<int, mixed>
	 */
	public function list(): array
	{
		$lines = explode("\n", (string) file_get_contents($this->file));

		$messages = [];
		foreach ($lines as $line) {
			$messages[] = Json::decode($line);
		}

		return $messages;
	}

}
