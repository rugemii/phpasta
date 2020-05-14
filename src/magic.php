<?php

// i think this built-in method by php exists on javascript
// wherein you can add a property on the fly or on runtime
// a property that is not being declared on class definition
// is being added through magic methods on php, namely
// __get and __set, demo below

class myMagicClass {

	// magic methods are for overloading
	// runtime attribute
	// it's an array for storing key value
	private $attributeArray;
	
	// magic methods for variables or properties
	function __set($attribute, $value) {
		$this->attributeArray[$attribute] = $value;
	}

	function __get($attribute) {
		if (array_key_exists($attribute, $this->attributeArray)) {
			return $this->attributeArray[$attribute];
		} else {
			return 'Error : undefined attribute';
		}
	}

	function __isset($attribute) {
		return $attribute;
	}

	function __unset($attribute) {
		return $attribute;
	}

	//magic methods for methods
	function __call($methodName, $argumentsForTheMethod) {
		
	}
}

$firstMagic = new myMagicClass();
$firstMagic->element = 'Fire';
echo isset($firstMagic->element) . PHP_EOL;
echo $firstMagic->element . PHP_EOL;

// probably what's happening on the background is
// the runtime check if the class definition has an
// __set or __get function declaration if the referenced
// property from a line of instantiation is not found
// then if the functions are present it will continue

// __isset and __unset functions are implemented for the 
// magic methods to check if a property added at runtime
// can be check if it has value and the value can be removed
// it's noted that it should be accessed as public



?>