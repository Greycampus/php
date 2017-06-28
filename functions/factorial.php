<?php

function factorial($number) 
{ 
    if ($number ==1 || $number==0) 
        return 1; 
    else 
    	//recursive function
        return ($number * factorial($number-1)); 
}
echo "Enter a number to find its actorial:";
//number to find the factorial
$k=trim(fgets(STDIN, 1024)); 
//calling factorial function 
echo "factorial is:".factorial($k)."\n";
 
?>
