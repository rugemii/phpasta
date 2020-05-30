<?php

$filepath = '../files/somefiles';

if (is_file($filepath)) {
	if (unlink($filepath)) {
		echo sprintf('The [%s] file was deleted.', $filepath) . PHP_EOL;
	} else {
		echo sprintf('The [%s] file was not deleted.', $filepath) . PHP_EOL;
	}
} else {
	sprintf('The [%s] file does not exist.', $filepath) . PHP_EOL;
}

?>