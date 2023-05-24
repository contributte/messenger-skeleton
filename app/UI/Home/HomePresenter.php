<?php declare(strict_types = 1);

namespace App\UI\Home;

use App\Domain\LogMessage;
use App\UI\BasePresenter;
use Nette\DI\Attributes\Inject;
use Symfony\Component\Messenger\MessageBus;

class HomePresenter extends BasePresenter
{

	#[Inject]
	public MessageBus $bus;

	public function handleRedis(): void
	{
		$this->bus->dispatch(new LogMessage('Hello!'));
		$this->flashMessage('Message dispatched');
		$this->redirect('this');
	}

}
