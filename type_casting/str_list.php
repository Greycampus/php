<?php

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

