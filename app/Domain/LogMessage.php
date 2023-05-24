<?php declare(strict_types = 1);

namespace App\Domain;

final class LogMessage
{

	public string $text;

	public function __construct(string $text)
	{
		$this->text = $text;
	}

}
