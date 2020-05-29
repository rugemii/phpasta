<?php

$filePath = __DIR__ . '/../files/users_list_enclosed.csv';
$fileResource = fopen($filePath, 'r');

if ($fileResource === false) {
	exit(sprintf('Cannot read [%s] file.', $filePath));
}

$recordNumber = 0;

while (!feof($fileResource)) {
	$recordNumber++;
	// fascinating don't have to give a parameter to track
	// line position
	$line = fgetcsv($fileResource);
	echo sprintf('Line %d: %s', $recordNumber, print_r($line,true));
}

fclose($fileResource);
echo "\n";
?>