<?php

interface MyInterface {

	// just a collection of methods signature
	function firstMethodName();
	function secondMethodName();
}

// it's worth noting that when using an interface into your class
// instead of using 'extends' keyword which only applies to abstract and parent
// class, we use 'implements' and the keyword itself means were interfacing
// or implementing because the class compromises only function signatures.

class MyClass implements MyInterface {

	function firstMethodName() {
		//method body
	}

	function secondMethodName() {
		//method body
	}
}

?>

<?php

// Drive Interface

interface Drive {
	function changeSpeed();
	function changeGear();
	function applyBreak();
}

// while this is cool, you're separating the ideas here
// think of an object which can be abstracted and has an interface
// a plug maybe 

class Car extends AbstractVehicle implements Drive {

	function changeSpeed($speed) {
		$this->speed++;
	}

	function changeGear($gear) {
		$this->gear = $gear;
	}

	function applyBreak() {
		$this->speed = 0;
	}
}

?>