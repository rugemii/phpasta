<?php declare(strict_types=1);

namespace Handlers;

// request to login? i'll handle that
class Profile extends Handler {
	
	public function handle() : string {
		// if an authenticated user tries to access the profile page
		if (!array_key_exists('username', $_SESSION)) {
			return (new Login)->handle();
		}

		// let the template render that one for you
		return (new \Components\Template('profile'))->render([
			'username' => $_SESSION['username'],
			'sessionData' => var_export($_SESSION, true)
		]);	
	}

	public function getTitle(): string {
		return 'Profile - ' . parent::getTitle();
	}
}

?>