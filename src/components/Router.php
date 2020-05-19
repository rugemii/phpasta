<?php
declare(strict_types=1);

namespace Router;
// responsible for picking a handler (a class) ins at rets
// will patch a uri path to a class
// /games -> handlers\games

class Router {

	public function getHandler() : ? Handler {
		switch($_SERVER['PATH_INFO'] ?? '/') {
			case '/login' :
				return new Login();
			default : 
				return null;
		}
	}
}

?>