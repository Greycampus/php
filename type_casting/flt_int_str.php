<?php

echo "Enter a float:";
//takes the float value
$num=trim(fgets(STDIN, 1024));
//converts the float value in to integer
$num1=(int) $num;
//converts the float value in to the string
$num2=(string) $num;
//displays the value of integer and string
echo "int value::$num1\n";
echo "string value:$num2\n";

?>