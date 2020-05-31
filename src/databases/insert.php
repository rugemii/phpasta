<?php

$phpDataObject = require 'connection.php';
$insertStatement = "INSERT INTO users (email) VALUES ('john.smith@mail.com')";

if ($phpDataObject->exec($insertStatement) === false) {
	list (,,$driverErrMsg) = $phpDataObject->errorInfo();
	echo "Error inserting record on the users table: $driverErrMsg" . PHP_EOL;
	return;
}

?>