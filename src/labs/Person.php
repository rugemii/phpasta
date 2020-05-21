<?php

class Person {
	
	public $name = 'Miguel';
	private $nickname = 'Procopio';
	public static $hobby = 'Music';
	private const YELL = 'Thanks!';
	private $eyeColor;
	protected $hairColor = 'brown';

	function __construct() {
		$this->eyeColor = 'black';
	}

	function getName() {
		return $this->name;
	}

	function getHobby() {
		return self::$hobby;
	}

	function getNickname() {
		return $this->nickname;
	}

	function getYell() {
		return self::YELL;
	}

	function getHairColor() {
		return $this->hairColor;
	}

	function __destruct() {
		echo PHP_EOL . 'Person has been vaporized';
	}
}

// when referencing a data or behavior from a class
// remove the dollar sign symbol before the name

// self keyword for accessing static and cons variable inside the class
// to get the value of a const inside a class use :: operator to get it
// only if it's public

/*
$samplePerson = new Person();
// to destroy an object
// unset($samplePerson);
// return;
echo $samplePerson->name . PHP_EOL;
echo $samplePerson->getHobby() . PHP_EOL;
echo $samplePerson->getNickname() . PHP_EOL;
echo $samplePerson->getName() . PHP_EOL;
echo $samplePerson->getYell();
*/
// assign default values to an instance of an object
// by supplying values to the parameter of constructor function

/*
function construct($name = 'Diaz', $love = 'Me') {
	
}
*/



?>