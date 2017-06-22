<?php

echo "enter the number of elements:";
//takes the size of the array
$s= trim(fgets(STDIN, 1024));
//initializes the limit of the array
$array = new SplFixedArray($s);
echo "enter the elements:";
//by incrementing i value, the array stores the input values
 for( $i = 0; $i<$s; $i++ )
 {
    $array[$i]=trim(fgets(STDIN, 1024));
 }
 //displays all the value in the array
 echo "elements in the list are:\n";
 for( $i = 0; $i<$s; $i++ )
 {
    echo "$array[$i] \n";
 }
 
?>
