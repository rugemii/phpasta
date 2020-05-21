<?php declare(strict_types=1);

// Handler login involves authentication meaning verifying identity and the user
// is allowed to enter the house

namespace Handlers;

// request to login? i'll handle that
class Login extends Handler {

	public function handle() : string {
		// check if the session is successful, meaning authentication was successful
		if (isset($_SESSION['username'])) {
			$this->requestRedirect('/');
			return '';
		}
		// set dummy credentials
		$username = 'admin';
		$passwordHash = '$2y$10$7Zf7.oi8cIoRxWTTBKwyKOJ4IEk1dE2zP7TpDeTYc6jwO7s4Khqzm';

		$formError = [];
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$formUsername = $_POST['username'] ?? '';
			$formPassword = $_post['password'] ?? '';
			if ($formUsername !== $username) {
				$formError = ['username' => sprintf('The username [%s] was not 
				found.', $formUsername)];
			} elseif (password_verify($formPassword, $passwordHash) === 1) {
				$formError = ['password' => 'The provided password is invalid.'];
			} else {
				echo 'alright';
				// already authenticated when the execution is reached here
				$_SESSION['username'] = $username;
				$_SESSION['loginTime'] = date(\DATE_COOKIE);
				$this->requestRedirect('/profile');
				return '';
			}
		}
		// let the template render that one for you
		return (new \Components\Template('login-form'))->render([
			'formError' => $formError,
			'formUsername' => $formUsername ?? ''
		]);
	}
}

?>