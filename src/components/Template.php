<?php
declare(strict_types=1);

namespace Components;
// loading and rendering a template from the templates
class Template {
	
	// hey where are the templates
	public static $viewsPath = __DIR__ . '/../templates';
	// sure the name of the template
	private $name;

	// an instance of a template must have the name of the template file
	public function __construct(string $name) {
		$this->name = $name;
	}

	// also the path
	private function getFilePath(): string {
		return self::$viewsPath . DIRECTORY_SEPARATOR . $this->name. '.php';
	}

	// templates need data to render something
	// and included that template file, smooth
	function render(array $data = []): string {
		extract($data, EXTR_OVERWRITE);
		ob_start();
		require $this->getFilepath();
		$rendered = ob_get_clean();
		return (string)$rendered;
	}
}
?>