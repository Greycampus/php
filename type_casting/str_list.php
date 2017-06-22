<?php

echo "Enter a string:";
//inputs string
$str = trim(fgets(STDIN, 1024));
//converts string to array using space as delimiter
$arr1 = explode(" ",$str);
print_r($arr1);

?>

