<?php

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
