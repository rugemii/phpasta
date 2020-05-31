<?php

$phpDatabaseObject = require 'connection.php';

$createStatement = "CREATE TABLE users (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	email VARCHAR(254) NOT NULL UNIQUE,
	signup_time DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL
)";

if ($phpDatabaseObject->exec($createStatement) === false) {
	list(,,$driverErrMsg) = $phpDatabaseObject->errorInfo();
	echo "Error creating the users table: $driverErrMsg" . PHP_EOL;
	return;
}

echo "The users table was successfully created.";

?>