<?php

$phpDataObject = require 'connection.php';
$partialMatch = 'getit';
$deleteStatement = $phpDataObject->prepare("DELETE FROM users WHERE email LIKE 
	:partialMatch");

if ($deleteStatement->execute([':partialMatch' => "%$partialMatch%"]) === false) {
	list(, , $driveErrMsg) = $deleteStatement->errorInfo();
	echo "Error deleting from the users table: $driveErrMsg" . PHP_EOL;
	return;
}

// if theres a deleted row then output it 
if ($rowCount = $deleteStatement->rowCount()) {
	echo sprintf("Succesffuly deleted %d records matching '%s' from users table.",
	$rowCount, $partialMatch) . PHP_EOL;
} else {
	echo sprintf("No records matching '%s' were found in users table.",
	$partialMatch) . PHP_EOL;
}

?>