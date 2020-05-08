<?php

declare(strict_types = 1);

// a production ready code check input 
// catches errors

// substr()

function getSubtr(string $personName, int $start, int $rest) : string {
	return substr($personName, $start, $rest);
}

echo getSubtr('Miguel Quizon', 10, 3) . PHP_EOL;

// magic method invoke 
// attached into a class
// when instantiated, the variable can be a function

class Chair {
	public function __invoke() {
		return "Yo!, i'm a chair.";
	}
}

$fourLeggedChair = new Chair();
echo $fourLeggedChair() . PHP_EOL;

// in real life project, processing multi-byte string is a thing
// usage of mb_ built-functions (as an extension) is suggested

echo mb_strtoupper('rowena') . PHP_EOL;

// getting the loaded extensions

foreach(get_loaded_extensions() as $extension) {
	echo $extension . PHP_EOL;
}

// namespacing is used to avoid classing with other names
// namespace YOUR_NAME_FOR_ORGANIZING_CODE

// meaning of side effect in function
// it changes something outside the scope of a function

// testing the global scope of a variable

$count = 0;

function countMe() {
	global $count;
	++$count;
}
countMe();
echo $count . PHP_EOL;

// so php scope on function does not allow or see the variables outside
// alter it, need to pull it by the keyword global

// test the pass by reference in functions

$mouseName = "Logitech";

function changeMouseName (string &$mouseName) {
	$mouseName = "Gumamela";
} 

changeMouseName ($mouseName);

echo $mouseName . PHP_EOL;

// and it works
// in order to make some changes on the outside variable of the 
// scope of a function, it should be passed by reference 

?>