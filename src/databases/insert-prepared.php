<?php

$phpDataObject = require 'connection.php'; // may this should be named pdo connection

// the prepared statement as a template stored
// it's better to use named parameters so the developer know
// what variable is being passed to the template
$insertStatement = $phpDataObject->prepare("INSERT INTO users (email) VALUES (:email)");

// pdo::execute returns boolean values
// at the same time you can pass an array with the mapping to the parameters
// binding the parameters 
if ($insertStatement->execute([':email' => 'something@mail.com' ?? null]) === false) {
	// what the list function do is it assign array values to multiple variables at a time
	list(,,$driverErrMsg) = $insertStatement->errorInfo();
	echo "There's some error into the users table: $driverErrMsg" . PHP_EOL;
	return;
}

echo "Successfully created a record into the users table." . PHP_EOL;

?>