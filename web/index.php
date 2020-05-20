<?php
declare(strict_types=1);
require
require_once __DIR__ . '/../src/components/Template.php';

$mainTemplate = new \Components\Template('main');

$templateData = [
	'title' => 'My Main Template'
];

echo $mainTemplate->render($templateData);

$router = new \Components\Router():

if ($handler = $router->getHandler()) {
	$content = $handler $handler->handle();
	if ($handler->willRedirect()) {
		return;
	}
	$templateData['content'] = $content;
	$templateData['title'] = $handler->getTitle();
}

?>