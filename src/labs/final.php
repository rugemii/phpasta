<?php

final class MyClass {
	public function myFunction() {
		echo "Base class method called.";
	}
}

// we use final keyword when we don't want something to
// be modified and inherited
// can be applicable to a class or a method in a class

// and to extend a class with multiple traits of for that
// it will house different function definition 
// Traits can't be instantiated
trait PriceTrait
{

	public function getPrice() {
		// the class or instance of the class's price
		return $this->price;
	}

	public function setPrice($price) {
		$this->price = $price;
	}
}

?>