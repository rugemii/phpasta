<?php
declare(strict_types=1);

function outputNum(int $number) {
	echo "the number is : $number";
}

outputNum(2);

//a simple typecasting

$numberOfKeys = "12";
echo "number of keys ". (int) $numberOfKeys;

?>