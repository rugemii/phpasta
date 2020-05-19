<?php

// filter_input function receives the type of input
// variable name to filter and a type checked to variable
$stars = filter_input(INPUT_POST, 'stars', 
	FILTER_SANITIZE_NUMBER_INT);

$message = filter_input(INPUT_POST, 'message',
	FILTER_SANITIZE_STRING);

$stars = (int) $stars;

// first approach
$stars = (int) $stars;

if ($stars < 1 || $stars > 5) {
	echo '<p>Stars can have values between 1 and 5</p>';
}

// second approach
// filter var function is where you check a variable
// by passing a filter
$stars = filter_var($stars, FILTER_VALIDATE_INT, [
	'options' => [
		'default' => 0, // value to return if fails
		'min_range' => 1,
		'max_range' => 5
	]
]);

if (0 === $stars) {
	echo '<p>Stars can have values between 1 and 5</p>';
}

// also the message should be validated
if (null === $message) {
	// treat the case when input
	// possible that a case of an input has not been 
	// checked
	echo '<p>Message input is not set.</p>';
} elseif (false === $message) {
	// treat the case when the filter fails
	echo '<p>Message failed to pass the sanitization filter.</p>';
}

echo sprintf("<p>Stars: %s</p>
	<p>Message: %s</p>", var_export($stars, true),
	var_export($message, true));

?>

<form method="post">
	<label for="stars">Stars: </label><br>
	<input type="text" name="stars" id="stars"><br>
	<label for="message">Message: </label><br>
	<textarea name="message" id="message" rows="10" cols="40">
	</textarea><br>
	<input type="submit" value="send">
</form>

<?php

// strip_tags() - strip the the tags on html where they 
// are not expected

// trip() - remove whitespaces

// is_numeric() - tells us if a variable is a number or a
// numeric string

// pre_match() - regular expressions matching bro

// in_array() - sort of array exists

?>