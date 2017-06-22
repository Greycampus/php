<?php

echo "Enter a year:";
//takes the input of a year to find whether lepayear or not
$year=trim(fgets(STDIN, 1024));

//$year%4==0 to check whether the year is divisible by 4
//($year%4==0 && $year%100!=0) to check whether the year is divisible by 4 but not with 100
//$year%400==0 condition to check whether the year is divisible by 400
if(($year%4==0 && $year%100!=0)|| $year%400==0)
  echo "Leap year\n";
else 
    echo "not a leap year\n";
  
?>