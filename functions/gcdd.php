<?php
/*PHP program of writing a function to find gcd of two numbers

Input
Enter two numbers whose GCD is to be found:15 27

Output
The GCD is:3
*/
//logic for gcd function
function gcdd($a,$b)
{
    #stopping condition for recursion that is bigger number is divisible by smaller number in gcd parameters
    if(max($a,$b)%min($a,$b)==0)
        return min($a,$b);
    else
        #returns gcd of remainder and divisor
        return gcdd(min($a,$b),max($a,$b)%min($a,$b));
}
$msg= "Enter two numbers whose GCD is to be found:";
echo $msg;
//enter two numbers in the form of a string
$str=trim(fgets(STDIN, 1024));
//converts string in to array
$a=explode(" ",$str);
//calling gcd function
echo "The GCD is:".gcdd($a[0],$a[1])."\n";

?>