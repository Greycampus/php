<?php

//takes the values in to the array
$k = array(1,2,3,4,5,6);
echo "list taken:\n";
//displays the array
print_r($k);
 //implode() converts array into string
$string=implode($k);
//displays the string  
echo "converted string:$string\n";

?>