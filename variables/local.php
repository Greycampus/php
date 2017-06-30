<?php
/*PHP program to use local variable and take input from user and print the nearest power of 3.

Input
Enter a number:5

Output
3
*/
$msg= "Enter a number:";
//displays the message stored in the msg variable
echo $msg;
//takes input of a number to find nearest power of 3
$n = fgets(STDIN, 1024);
$n = trim($n);
//finds the logarithm of the given number to the base 3
//floor function rounds the number down to the integer
$minn = floor(log($n,3));
//finds the logarithm of the given number to the base 3
//ceil function rounds the number up to the integer
$maxn = ceil(log($n,3));
//'**' denotes the power of the value
//we all know the formula a^m=n => m=log n to the base a
//in this program we are finding out the log of the number to the base 3 
//now rounding the values to down to the integer and up to the integer as min an max repectively
//if number is less than the (3 power min) then the nearest value will be (3 power min)
//if number ig greater than the (3 power max) then the nearest value will be (3 power max)
//e.g: num=8
//max value=log(8,n) =>1.89
//after rounding down to integer value is 1
//min value=log(8,n) =>1.89
//after rounding up to integer value is 3
//since 8-3>3^2-8, answer id 3^2
if(($n-3**$minn)<=(3**$maxn-$n))
{
	echo 3**$minn."\n";
}
else
 echo 3**$maxn."\n";
?>