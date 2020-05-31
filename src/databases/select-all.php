<?php

$phpDataObject = require 'connection.php';
$statement = "SELECT * FROM users";

// i used exec instead of query just for experiment purposes
// edited : use query instead, thrown an exception
$result = $phpDataObject->query($statement);

if ($result === false) {
	list(,,$driverErrMsg) = $result->errorInfo();
	echo "Hey, error on getting those records: $driverErrMsg" . PHP_EOL;
	return;
}

echo "All Records" . PHP_EOL;
while ($record = $result->fetch()) {
	echo implode("\t", $record) . PHP_EOL;
}

?>