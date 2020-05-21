<?php declare(strict_types=1);

namespace Handlers;

// request to login? i'll handle that
class Profile extends Handler {
	
	public function handle() : string {
		// let the template render that one for you
		return (new \Components\Template('profile'))->render();
	}
}

?>