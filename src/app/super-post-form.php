<?php

$heroes = [
	"a-bomb" => [
		"id" => 1017100,
		"name" => "A-Bomb (HAS)"
	],
	"captain-america" => [
		"id" => 1009220,
		"name" => "Captain America"
	],
	"black-panther" = [
		"id" => 1009187,
		"name" => "Black Panther"
	]
];

$selectedHero = [];
// process the post request, if any

// check if theres a 'hero' key on the post variable 
if (array_key_exists('hero', $_POST)) {
	// if yes there is, check if the value of 'hero' key is in the 
	// heroes array
	// then put that as a heroId (i think it should be heroKey)
	if (array_key_exists($_POST['hero'], $heroes)) {
		$heroId = $_POST['hero'];
		$selectedHero = $heroes[$heroId];
	}
}

?>