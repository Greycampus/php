<?php
echo "whats your name?";
//takes input in the string format
$input = trim(fgets(STDIN, 1024));
//displays the user name
echo "Hello $input\n";
?>
