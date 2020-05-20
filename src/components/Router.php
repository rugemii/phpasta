<?php
declare(strict_types=1);

namespace Router;
use Handlers\Handler;
use Handlers\Login;
use Handlers\Logout;
use Handlers\Profile; 
// responsible for picking a handler (a class) ins at rets
// will patch a uri path to a class
// /games -> handlers\games

// when an instance has been done
// it will determine the right handler that has
// the right Hander extended by a handler?
// 

class Router {

	public function getHandler() : ? Handler {
		switch($_SERVER['PATH_INFO'] ?? '/') {
			case '/login' :
				return new Login();
			case '/':
				return null;
			default : 
			// anonymouse class
				return new class extends Handler {
					pulic function handle() : string {
						$this->requestRedirect('/');
						return '';
					}
				}
		}
	}
}

?>