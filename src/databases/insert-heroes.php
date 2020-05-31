<?php

$phpDataObject = require 'connection.php';

$insertStatement = $phpDataObject->prepare("INSERT INTO heroes (email,name) VALUES 
	(:email, :name)");

if ($insertStatement->execute([':email' => 'quicksilver@gmail.com', 
	':name' => 'Pietro' ]) === false) {
	list(,,$driverErrMsg) = $insertStatement->errorInfo();
	echo "Something went wrong, can't create that record for heroes: $driverErrMsg"
		. PHP_EOL;
	return;
}

echo "Yep, we were able to create one. Thanks";