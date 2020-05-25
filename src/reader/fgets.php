<?php

$filePath = __DIR__ . '/../files/users_list.csv';
$fileResource = fopen($filePath, 'r');

if ($fileResource === false) {
	exit (sprintf('Cannot read the file [%s].', $filePath));
}

$lineNumber = 0;

while (!feof($fileResource)) {
	$lineNumber++;
	// is the specialise function for reading a file line by line
	$line = fgets($fileResource);
	echo sprintf("LIne %d: %s", $lineNumber, $line);
}

fclose($fileResource);
echo PHP_EOL;
?>