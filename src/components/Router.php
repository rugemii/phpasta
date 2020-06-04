<?php declare(strict_types=1);

namespace Components;

use Handlers\Handler;
use Handlers\Login;
use Handlers\Logout;
use Handlers\Profile;

class Router {
    public function getHandler(): ?Handler {
        // the critical one here the server getting the path 
        switch ($_SERVER['PATH_INFO'] ?? '/') {
            case '/login':
                return new Login();
            case '/profile':
                return new Profile();
            case '/logout':
                return new Logout();
            case '/':
                return null;
            default:
                return new class extends Handler {
                    public function handle(): string {
                        $this->requestRedirect('/');
                        return '';
                    }
                };
        }
    }
}