<?php

// get all the data first

$heroes = [
	"a-bomb" => [
		"id" => 1017100,
		"name" => "A-Bomb (HAS)"
	],
	"captain-america" => [
		"id" => 1009220,
		"name" => "Captain America"
	],
	"black-panther" => [
		"id" => 1009187,
		"name" => "Black Panther"
	]
];

// process the data

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

<!-- feed it to the view -->

<div style="background: #eee">
	<p>Selected hero: </p>
	<?php if ($selectedHero) { ?>
		<h3><?= $selectedHero['name'] ?></h3>
		<h4>ID: <?= $selectedHero['id'] ?></h4>
	<?php } else { ?>
		<p>None.</p>
	<?php } ?>
</div>

<p>The value of $_POST is : </p>
<pre><?= var_export($_POST, true); ?></pre>

<form action="./super-post-form.php" method="post"
	enctype="application/x-www-form-urlencoded">
	<label for="hero_select">Select your hero: </label>
	<select name="hero" id="hero_select">
		<?php foreach ($heroes as $heroId => $heroData) { ?>
			<option value="<?= $heroId ?>"><?= $heroData['name'] ?>
			</option>
		<?php } ?>
	</select>
	<input type="submit" value="show">
</form>