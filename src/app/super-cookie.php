<?php

if (array_key_exists('refcode', $_GET)) {
	//store for 30 days
	setcookie('ref', $_GET['refcode'], time() + 60 * 60 * 24 * 30);
	echo sprintf('<p> The referral code [%s] was stored in a cookie</p>');
} else {
	echo sprintf('<p>No referral code was set in query string.</p>');
}

echo sprintf('<p>Referral code : [%s]</p>', array_key_exists('ref', $_COOKIE) ? $_COOKIE['ref'] : '-None-');

?>

<form action="super-cookie.php" method="get">
	<input type="text" name="refcode" placeholder="EVENT19"
	value="EVENT20">
	<input type="submit" value="Apply Referral Code">
</form>