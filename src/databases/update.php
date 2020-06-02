<?php 

$phpDataObject = require 'connection.php';
$updateId = 3;
$updateEmail = 'facemask@gmail.com';

// returns PDOStatement object 
// make sure your sql statements are correct
$updateStatement = $phpDataObject->prepare("UPDATE users SET email = :email 
	WHERE id = :id");

// we evaluate the result of the function and binded the parameters
// the same time
if ($updateStatement->execute([':id' => $updateId, ':email' => $updateEmail])
	=== false) {
	list(, , $driverErrMsg) = $updateStatement->errorInfo();
	echo "Error running the query: $driverErrMsg" . PHP_EOL;
	return;
}

echo sprintf("The query ran successfully. %d row(s) were affected",
	$updateStatement->rowCount()) . PHP_EOL;

?>