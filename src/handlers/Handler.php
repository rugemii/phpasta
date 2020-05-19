<?php
declare(strict_types=1);

namespace Handlers;

abstract class Handler {

	private $redirectUri  = '';
	abstract public function handle() : string;

	public function getTitle() : string {
		return 'Learning PHP';
	}
}


?>