<?php

if (!session_start()) {
	echo 'Cannot start the session.';
	return;
}

$sessionName = session_name();

echo sprintf('<p> The cookie with sessions [%s] does not exist.</p>', $sessionName);

echo sprintf('<p>A new cookie will be set for session name [%s]</p>', $sessionName, session_id());

// to generate a cookie with the generated sessionId
// simply call session_start()

$names = [
	'A-Bomb (HAS)',
	'Captain America',
	'Black Panther'
];

$chosen = $names[rand(0,2)];
$_SESSION['name'] = $chosen;

echo sprintf('<p>The name [%s] was picked and stored in current session.</p>',
	$chosen);

echo sprintf('List of headers to send in response: <pre>%s</pre>',
	implode("\n", headers_list()));

echo sprintf('<p>The cookie with session name [%s] and value [%s]'.
	'is set in browser, and sent to script.</p>', $sessionName, 
	$_COOKIE[$sessionName]);

echo sprintf('<p>The current session has the following data: <pre>%s</pre>',
	var_export($_SESSION, true));

echo '<pre>'. var_dump($_SESSION) . '</pre>';
echo '<pre>'. var_dump($_COOKIE) . '</pre>';

?>