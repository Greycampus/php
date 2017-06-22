<?php

echo "Enter a number:";
//takes input a number
$num = trim(fgets(STDIN, 1024));
//$num%2!=0 is condition for odd and $num%9==0 is condition for multiples of nine
if($num%2!=0 && $num%9==0) 
	echo "$num is odd and multiple of 9\n";
//$num%2!=0 is condition for odd and $num%9!=0 is condition for non multiples of nine
elseif($num%2!=0 && $num%9!=0)//odd
	echo "$num is odd but not a multiple of 9\n";
//$num%2==0 is condition for not odd and $num%9==0 is condition for multiples of nine
elseif($num%2==0 && $num%9==0)//multiple of nine
	echo "$num is not odd but multiple of 9\n";
//if the condition does not satisfies any of the above, then this block executed
else
	echo "$num is not odd and not a multiple of 9\n";


?>