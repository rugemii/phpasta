<?php

$filePath = '../files/bagay';
$targetDirectory = '../archives';

// check if theres a file
if (!is_file($filePath)) {
	echo sprintf('The [%s] does not exist.', $filePath) . PHP_EOL;
	return;
}

// check if the target directory exist if not , create one
if (!is_dir($targetDirectory)) {
	echo sprintf('The target directory does not exist, will create one..');
	if (!mkdir($targetDirectory, 0777, true)) { // recursive for true if parent dir not ex
		echo sprintf('The target directory can\'t be created') . PHP_EOL;
		return;
	}
	echo 'Done'. PHP_EOL;
}

# so this is also a comment hahaha

$targetFilePath = $targetDirectory.DIRECTORY_SEPARATOR.basename($filePath);

if (rename($filePath, $targetFilePath)) {
	echo sprintf('The [%s] was successfully moved in [%s].', basename($filePath), 
		$targetDirectory) . PHP_EOL;
} else {
	echo sprintf('The [%s] was not successfully moved in [%s].', basename($filePath),
		$targetDirectory). PHP_EOL;
}
?>