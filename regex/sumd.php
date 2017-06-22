<?php

echo "enter the alphanumeric string:";
//takes a string along with sum nubers
$str=trim(fgets(STDIN, 1024));
//the pattern in preg_replace function replaces all the alphabets with null, such that only digits are present in string
$str = preg_replace('/\D/', '', $str);
$num=$str;
$sum=0;
//calculates the sum of the digits
while ($num > 0)
  {
  	//extracts the last digit
    $digit = $num % 10;
    //adding the last digit one by one
    $sum  = $sum + $digit;
    //extracts the number leacving last digit
    $num /= 10;
  }
  //displays the sum
 echo "the sum is:".$sum."\n";

?>