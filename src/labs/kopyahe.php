<?php

$sourceFilePath = '../files/gyahe';
$targetFilePath = '../files/gyahe.bak';

if (!is_file($sourceFilePath)) {
	echo sprintf("The source file can't be round or does not exist [%s]",
		$sourceFilePath). PHP_EOL;
	return;
}

if (copy($sourceFilePath, $targetFilePath)) {
	echo sprintf('File successfully created/copied as backup [%s]', $targetFilePath)
		. PHP_EOL;
} else {
	echo sprintf('File was not copied, ang fail [%s]', $sourceFilePath);
}

?>