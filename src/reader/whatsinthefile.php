<?php declare(strict_types=1);

// file contents of the csv file
echo file_get_contents(__DIR__. '/../files/users_list.csv');
// php built-in functions for getting a resource (reference to a data stream)
// meaning file operations depends on a stream like a body of water
// it's on the stream first before you can read or write into it
?>