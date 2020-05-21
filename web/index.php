<?php
// this is our entry point
declare(strict_types=1);
// one of the MAGIC constants
// stores the current script's directory
require_once __DIR__ . '/../src/components/Template.php';
require_once __DIR__ . '/../src/components/Router.php';
require_once __DIR__ . '/../src/handlers/Handler.php';
require_once __DIR__ . '/../src/handlers/Login.php';
require_once __DIR__ . '/../src/handlers/Profile.php';

session_start();

$mainTemplate = new \Components\Template('main');

$templateData = [
	'title' => 'My Main Template'
];

// the router talks to Handler
// Router hey i need to get the handler
// then a handler of their own kind has a handle functionality
// that is render the appropriate template
// the data lies or process before on the template
$router = new \Components\Router();
if ($handler = $router->getHandler()) {
	$content = $handler->handle();
	if ($handler->willRedirect()) {
		return;
	}
	$templateData['content'] = $content;
	$templateData['title'] = $handler->getTitle();
}

echo $mainTemplate->render($templateData);

?>