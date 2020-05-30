<?php

echo php_sapi_name() . PHP_EOL;

// is the location of the file
$file_fileputcontents = '../files/write-with-fwrite.txt';
// sometimes the file resource
// direct manipulation with the input as parameter
$written = file_put_contents($file_fileputcontents, 'written with fileputcontent'. PHP_EOL);

// checking the operation
if (false === $written) {
	echo 'Error wrinting into the file via fwrite' . PHP_EOL;
} else {
	// feedback and subsequent operation and messages
	echo sprintf("Successfully written %d bytes to %s with file_put_contents: ",
	$written, $file_fileputcontents) . PHP_EOL;
	echo file_get_contents($file_fileputcontents) . PHP_EOL;
}

?>