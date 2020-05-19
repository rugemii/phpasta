<?php

require_once __DIR__ . '/../src/components/Template.php';

$mainTemplate = new \Components\Template('main');

$templateData = [
	'title' => 'My Main Template'
];

echo $mainTemplate->render($templateData);

?>