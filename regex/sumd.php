<?php

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