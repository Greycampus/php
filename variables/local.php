<?php

echo "Enter a number:";
//takes input of a number to find nearest power of 3
$num = trim(fgets(STDIN, 1024));
//finds the logarithm of the given number to the base 3
$min= log($num,3);
//rounds the number down to the integer
$min=floor($min);
//finds the logarithm of the given number to the base 3
$max=log($num,3);
//rounds the number up to the integer
$max=ceil($max);
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
if(($num-3**$min)<=(3**$max-$num))
{
	echo 3**$min;
}
else
 echo 3**$max;
?>