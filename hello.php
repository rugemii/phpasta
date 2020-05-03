<?php

echo "Hello World!, PHPASTA here :)<br>";

$myName = "Miguel";
$getParameter = $_GET['nickname'];

echo "He's " . $myName . " and his nickname is " . $getParameter . "<br>";

$sneakerColor = "blue";

//assignment of variable by value
$clothColor = $sneakerColor;
echo "Assignmen of variable by value : " . $clothColor . "<br>";

//assignment of variable by ref
$shoesColor = &$clothColor;
echo "Assignment of variable by ref : " . $shoesColor . "<br>";
$shoesColor = "red";
echo "Value of $shoesColor variable has been changed to: " . $shoesColor . "<br>";
echo "Value of $clothColor should be : " . $clothColor . "<br>";

//output on double quoted strings
echo "The value insided the double quote is : $shoesColor<br>";

//heredoc syntax for large text
$passage = <<<STRING
The heredoc actually functions like the double quoted string but you can store<br>
the "dynamic text" in new lines so it will appear clean. You can also <br>
get the value from variables, for example the shoeColor which is $shoesColor. <br>
STRING;

echo $passage;

//nowdocs does not get the value from a variable compare to heredoc
//heredoc is more useful
//nowdoc is for static text

$comment = <<<'STRING'
Here the nowdoc syntax, can't get values from a variable and that's it.
STRING;

echo $comment;

?>