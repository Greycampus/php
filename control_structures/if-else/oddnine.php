<?php
/*PHP program to print whether a given number is odd and also a multiple of nine

Input
enter a number:15

Output
15 is odd but not a multiple of 9
*/
$msg="enter a number:";
echo $msg;
//takes input a number
$a = fgets(STDIN, 1024);
//trim function avoids the whitespaces
$a=trim($a);
//$a%2!=0 is condition for odd and $a%9==0 is condition for multiples of nine
if($a%2!=0 && $a%9==0) 
 echo "$a is odd and multiple of 9\n";
//$a%2!=0 is condition for odd and $a%9!=0 is condition for non multiples of nine
elseif($a%2!=0 && $a%9!=0)//odd
 echo "$a is odd but not a multiple of 9\n";
//$a%2==0 is condition for not odd and $a%9==0 is condition for multiples of nine
elseif($a%2==0 && $a%9==0)//multiple of nine
 echo "$a is not odd but multiple of 9\n";
//if the condition does not satisfies any of the above, then this block executed
else
 echo "$a is not odd and not a multiple of 9\n";

?>