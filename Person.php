<?php

class Person {
	
	public $name = 'Miguel';
	private $nickname = 'Procopio';
	public static $hobby = 'Music';
	private const YELL = 'Thanks!';

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
}

// when referencing a data or behavior from a class
// remove the dollar sign symbol before the name

// self keyword for accessing static and cons variable inside the class
// to get the value of a const inside a class use :: operator to get it
// only if it's public

$samplePerson = new Person();
echo $samplePerson->name . PHP_EOL;
echo $samplePerson->getHobby() . PHP_EOL;
echo $samplePerson->getNickname() . PHP_EOL;
echo $samplePerson->getName() . PHP_EOL;
echo $samplePerson->getyELL();

?>