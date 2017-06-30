<?php
/*PHP program to use array as set in the code to store only unique items in a array or list

Input
enter list of your choice with repetition:12 54 12 54 78 78 79

Output
Array
(
    [0] => 12
    [1] => 54
    [4] => 78
    [6] => 79
)
*/
//the message that is to be displayed is stored in msg variable
$msg = "enter list of your choice with repetition:";
//echo displays the message
echo $msg;
//STDIN takes the input from the user
$a = fgets(STDIN, 1024);
//trin function avoids the whitespaces from the user input
$a = trim($a);
//explode function splits the numbers in to array
$b = explode(" ",$a);
//array_unique function takes the unique elements from the array
$c = array_unique($b);
//print_r functions prints the entire array
print_r($c);

?>
