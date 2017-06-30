<?php
/*PHP program to take float as input from user and convert it into integer and string then print it in respective manner

Input
3.6

Output
the int value:3
converting into string:3.6
*/
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