<?php
declare(strinct_types=1);

namespace Handlers;

// request to login? i'll handle that
class Login extends Handler {
	
	public function handle() : string {
		// let the template render that one for you
		return (new \Components\Template('login-form'))->render();
	}
}

?>