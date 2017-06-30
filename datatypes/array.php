<?php
/*PHP program to take input, a sequence of numbers from user and store it in a list or array

Input
enter the number of elements:3
enter the elements:
11
12
13

Output
elements in the list are:
11
12
13
*/
$msg="enter the number of elements:\n";
//displays the message stored in msg variable
echo $msg;
//takes the size of the array
$a= fgets(STDIN, 1024);
//trim function avoids the whitespaces
$a=trim($a);
echo "enter the elements:";
//by incrementing i value, the array stores the input values
 for( $i = 0; $i<$a; $i++ )
 {
    $array[$i]=trim(fgets(STDIN, 1024));
 }
 //displays all the value in the array
 echo "elements of list are:\n";
 for( $i = 0; $i<$a; $i++ )
 {
    echo "$array[$i] \n";
 }
 
?>
