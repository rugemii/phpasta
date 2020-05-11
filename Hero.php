<?php

require_once 'Person.php';

class Hero extends Person {
	
	// to referenece members from the base or parent class
	// parent::<member>
	public $name = "gamble";
}

$estrangHero = new Hero();
echo $estrangHero->name;
?>