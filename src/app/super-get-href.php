<?php

// define the data

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

if (array_key_exists('hero', $_GET)) {
	if (array_key_exists($_GET['hero'], $heroes)) {
		$heroId = $_GET['hero'];
		$selectedHero = $heroes[$heroId];
	}
}
?>

<div style="background: #eee">
	<p>Selected hero:</p>
	<?php if ($selectedHero) { ?>
		<h3><?= $selectedHero['name'] ?></h3>
		<h4>ID: <?= $selectedHero['id'] ?></h4>
	<?php } else { ?>
		<p>None.</p>
	<?php } ?>
</div>

<?php 

// http_build_query to build a url string query from an associate array

function path(array $queryData) {
	return sprintf('./super-get-href.php?%s', http_build_query($queryData));
}

$heroLinks = [];

foreach ($heroes as $heroId => $heroData) {
	$heroLinks[] = sprintf('<a href="%s">%s</a>',  path(['hero' => $heroId]),
	$heroData['name']);
}

echo sprintf('<p>%s</p>', implode(' // ', $heroLinks));

?>