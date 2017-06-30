<?php
/* PHP program to take a string and convert it into list or array by using the spaces in the string as delimiter

Input
python php ruby

Output
entered string is:python php ruby
list generated is:Array
(
    [0] => python
    [1] => php
    [2] => ruby
)

*/
$msg="Enter the string:";
echo $msg;
//inputs string
$str = trim(fgets(STDIN, 1024));
echo "entered string is:$str\n";
//converts string to array using space as delimiter
$li = explode(" ",$str);
echo "list generated is:";
//displays the array
print_r($li);

?>

