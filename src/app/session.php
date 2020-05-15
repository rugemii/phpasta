<?php

if (!session_start()) {
	echo 'Cannot start the session.';
	return;
}

$sessionName = session_name();

echo sprintf('<p> The cookie with sessions [%s] does not exist.</p>', sessionName);

echo sprintf('<p>A new cookie will be set for session name [%s'], </p>');

// to generate a cookie with the generated sessionId

simply call session_start()

?>