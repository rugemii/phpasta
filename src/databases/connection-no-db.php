<?php

$dataSourceName = "mysql:host=127.0.0.1;port=3306;charset=utf8mb4";

$options = [
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

$phpDataObject = new PDO($dataSourceName, "root", "", $options);

return $phpDataObject;

?>