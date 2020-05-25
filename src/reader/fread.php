<?php

// first we need a file
$filePath = __DIR__ . DIRECTORY_SEPARATOR . $argv[1];
// you open the file as a resource (stream of data)
$fileResource = fopen($filePath, 'r');
// if it's really file , we need to be sure
if ($fileResource === false) {
	exit(sprintf('Cannot read [%s] file.', $filePath));
}

$readLength = 33;
$iterations = 0;

while (!feof($fileResource)) {
	$iterations++;
	$chunk = fread($fileResource, $readLength);
	echo $chunk;
}

fclose($fileResource);
echo sprintf("\n%d iteration(s)", $iterations);
?>