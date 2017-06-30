<?php
/*PHP program to find whether the given year is leap year or not with the following conditions
The year can be evenly divided by 4, unless;
The year can be evenly divided by 100, it is NOT a leap year, unless;
The year is also evenly divisible by 400. Then it is a leap year.
Input
enter year:1900

Output
1900 is not a leap year
*/
$msg= "enter year:";
echo $msg;
//takes the input of a year to find whether lepayear or not
$year=fgets(STDIN, 1024);
//trim function avoids the whitespaces
$year=trim($year);
//$year%4==0 to check whether the year is divisible by 4
//($year%4==0 && $year%100!=0) to check whether the year is divisible by 4 but not with 100
//$year%400==0 condition to check whether the year is divisible by 400
if(($year%4==0 && $year%100!=0)|| $year%400==0)
 echo "$year is a leap year\n";
else 
 echo "$year is not a leap year\n";
  
?>