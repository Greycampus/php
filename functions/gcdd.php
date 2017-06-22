<?php

echo "Enter two numbers:";
//enter two numbers in the form of a string
$str=trim(fgets(STDIN, 1024));
//converts string in to array
$a=explode(" ",$str);
echo "gcd of two numbers is:";
//calling gcd function
echo gcdd($a[0],$a[1]);
echo "\n";
//logic for gcd function
function gcdd($n,$m){
    #stopping condition for recursion that is bigger number is divisible by smaller number in gcd parameters
    if(max($n,$m)%min($n,$m)==0)
        return min($n,$m);
    else
        #returns gcd of remainder and divisor
        return gcdd(min($n,$m),max($n,$m)%min($n,$m));
    }


?>
