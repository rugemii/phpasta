<?php

$file_fwrite = '../files/write-with-fwrite.txt';
// will get an error if no file 
$fp = fopen($file_fwrite, 'w+'); // the resource always go with fopen()
// w+ open for reading and writing, file pointer at beginning
$written = fwrite($fp, 'file written with fwrite().' . PHP_EOL);

if (false === $written) {
	echo 'Error writing with fwrite';
} else {
	echo sprintf("> Successfully written %d bytes to [%s] with fwrite(): ",
	$written, $file_fwrite) . PHP_EOL;
	fseek($fp, 0); // no offset used , so from the start , set's the pointer position
	echo fread($fp, filesize($file_fwrite)) . PHP_EOL;
}
?>