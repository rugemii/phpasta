<?php

// exploring the magic constants
// this value of this variables are magic lol

echo __LINE__ . "<br>";
echo __FILE__ . "<br>";
echo __DIR__ . "<br>";
echo __FUNCTION__ . "<br>";
echo __CLASS__ . "<br>";
echo __TRAIT__ . "<br>";
echo __METHOD__ . "<br>";
echo __NAMESPACE__ . "<br>";
echo "miguel". "<br>";
echo "somthing";

$script_file = file_get_contents(__FILE__);

// the function above file get contents store it in the memory
// and release it after it's been read completely, so not suitable
// for large files, memory_limit configuration in php can be change
// in order to use this function effectively.

?>