<?php

$phpDataObject = require 'connection-no-db.php';

$databaseName = 'demo';
$sql = "CREATE SCHEMA $databaseName";

if ($phpDataObject->exec($sql) !== false) {
	echo "The database '$databaseName' was successfully created." .  PHP_EOL;
} else {
	list(,, $driverErrMsg) = $phpDataObject->errorInfo();
	echo "Error creating the database: $driverErrMsg" . PHP_EOL;
}

?>