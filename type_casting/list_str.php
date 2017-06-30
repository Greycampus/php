<?php
/*PHP program to take input, a sequence of numbers from user and store it in a list or array

Output
list taken:
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
)
converted string:123456
*/
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