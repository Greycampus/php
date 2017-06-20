<?php

echo "Enter a number to find factorial:";
//number to find the factorial
$num=trim(fgets(STDIN, 1024)); 
echo "Factorial is:";
 //calling factorial function 
echo factorial($num); 
function factorial($number) 
{ 
    if ($number ==1 || $number==0) 
    { 
        return 1; 
    } 
    else 
    { 
    	//recursive function
        return ($number * factorial($number-1)); 
    } 
}
echo "\n";
?>
