<?php
/*PHP program to print Hello User after reading user name from input

Input
whats your name?
Bhavana

Output
Hello Bhavana*/
$msg = "whats your name?\n";
//displays the message stored in msg
echo $msg;
//takes input in the string format from the user
$a = fgets(STDIN, 1024);
//displays the user name along with hello
echo "Hello $a\n";
?>
