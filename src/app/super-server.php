<?php

session_start();
setcookie();
echo sprintf("<pre>%s</pre>", print_r($_SERVER,true));
echo sprintf("<pre>%s</pre>", print_r($_COOKIE,true));

?>