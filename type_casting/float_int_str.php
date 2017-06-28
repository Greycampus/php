<?php

$msg="enter a float:";
echo $msg;
//takes the float value
$a=fgets(STDIN, 1024);
//trim function avoids the whitespaces of the user input
$a=trim($a);
//converts the float value in to integer
$k=(int)$a;
//displays the value of integer
echo "the int value:$k\n";
//converts the float value in to the string
$k=(string)$a;
//displays the value of string
echo "converting into string:$k\n";

?>