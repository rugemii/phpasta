<?php

$dataSourceName = "mysql:host=127.0.0.1;port=3306;charset=utf8mb4";

$options = [
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

$phpDataObject = new PDO($dataSourceName, "root", "", $options);

echo sprintf(
	"Connected to MySQL server v%s, on %s",
	$phpDataObject->getAttribute(PDO::ATTR_SERVER_VERSION),
	$phpDataObject->getAttribute(PDO::ATTR_CONNECTION_STATUS)
) . PHP_EOL;

?>