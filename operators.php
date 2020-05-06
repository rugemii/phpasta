<?php
// declare(strict_types = 1);
// when type conversion is applied for evaluation

// on equality operator

(int) $intNum = 1;
$stringNum = '1';

if ($intNum === $stringNum) {
	echo "type conversion is applied : true<br>";
} else {
	echo "type conversion is not applied : false<br>";
}

// switch statement does loose comparison
$switchParam = '1';
switch ($switchParam) {
	case '1':
		echo "case on '1'<br>";
		break;
	case 2: 
		echo "case on 1<br>";
		break;
}

// gettype function, get's the data type of a variable
echo "switch parameter data type is : " . gettype($switchParam) . "<br>";

// foreach loop on two-dimensional array
$myDevices = [
	['pen', 'cil', 'note'],
	['mou', 'key', 'handsh']
];

foreach ($myDevices as $devices) {
	foreach ($devices as $gamit) {
		echo $gamit . PHP_EOL;
	}
}

//array_keys function on associative array
$unusuals = array(
	"door" => "opportunity",
	"slippers" => "joyful journey",
	"breathe" => "life"
);

$key = array_search ("life", $unusuals);
echo $key;

?>