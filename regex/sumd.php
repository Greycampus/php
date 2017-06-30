<?php
/*PHP program to find the sum of the numbers in a alphanumeric string 

Input
enter the alphanumeric string:bhadfdf1205210dfdvana996

Output
the sum is:35
*/
$msg="enter the alphanumeric string:";
echo $msg;
//takes a king along with sum nubers
$k=trim(fgets(STDIN, 1024));
//the pattern in preg_replace function replaces all the alphabets with null, such that only digits are present in king
$k = preg_replace('/\D/', '', $k);
//str_split function splits the nmber in to array
//array_sum function sums the numbers in the array
$sum=array_sum(str_split($k));
//displays the sum
echo "the sum is:".$sum."\n";

?>