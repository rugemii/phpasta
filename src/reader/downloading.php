<?php declare(strict_types=1);

// here you can set your validation if the client can read
// the file sent by the server, for example
// check authentication
// check if post variable were set
// validation first

$filePath = 'files/users_list.csv';
header('Content-Type: text/csv');
header('Content-Length: '. filesize($filePath));
header(sprintf('Content-Disposition: attachment; filename="%s"',
basename($filePath)));
readfile($filePath);

?>