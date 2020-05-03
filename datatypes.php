<?php

//output on double quoted strings
echo "The value insided the double quote is : $shoesColor<br><br>";

//heredoc syntax for large text
$passage = <<<STRING
The heredoc actually functions like the double quoted string but you can store<br>
the "dynamic text" in new lines so it will appear clean. You can also <br>
get the value from variables, for example the shoeColor which is $shoesColor. <br><br>
STRING;

echo $passage;

//nowdocs does not get the value from a variable compare to heredoc
//heredoc is more useful
//nowdoc is for static text

$comment = <<<'STRING'
Here the nowdoc syntax, can't get values from a variable and that's it<br><br>
STRING;

echo $comment;

//ARRAYS
//there are two types of array
//indexed array
//numerical index

$weekdays = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"];
//the other way in declaring an array array();
$nicknames = array('chtndr', 'martyr', 'sulat');

print_r($weekdays);
echo "<br><br>";
print_r($nicknames);
echo "<br><br>";

//associative array
//string index
$unusuals = array(
	"door" => "opportunity",
	"slippers" => "joyful journey",
	"breathe" => "life"
);

print_r($unusuals);

//add an element
$weekdays[] = "Cheatday";
array_push($weekdays, "Restday");
echo "<br><br>";
print_r($weekdays);
echo "<br><br>";

$unusuals["settle"] = "build";
print_r($unusuals);
echo "<br><br>";

//remove an element
array_pop($weekdays);
print_r($weekdays);
echo "<br><br>";
unset($weekdays[0]);
print_r($weekdays);
echo "<br><br>";
array_pop($unusuals);
print_r($unusuals);
echo "<br><br>";
unset($unusuals["slippers"]);
print_r($unusuals);
echo "<br><br>";

//the multidimesional array
$partnerships = array(
	[
		"mouse" => "cat",
		"mind" => "brain",
	],
	[
		"spaces" => "relax",
		"coffee" => "candy"
	],
	[
		"know" => "figured",
		"heart" => "volatile"
	]
);

print_r($partnerships);
echo "<br><br>";
print_r($partnerships[0]);

?>