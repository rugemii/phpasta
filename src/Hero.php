<?php

require_once 'Person.php';

class Hero extends Person {
	
	// to referenece members from the base or parent class
	// parent::<member>
	public $name = "gamble";
}

$estrangHero = new Hero();
// echo $estrangHero->hobby . PHP_EOL
// there's no need to instantiate an object 
// public static field can be accessed like this.
echo Hero::$hobby . PHP_EOL;
echo $estrangHero->getHairColor() . PHP_EOL;
?>