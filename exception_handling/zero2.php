<?php

function check($a,$b)
{
   //converts the divisor-1 value in to binary format, as 2^n-1 contains only 1's in its binary value
   $bi=decbin($b-1);
   //nows split the binary value
   $bi=str_split($bi,1);
   //extract the unique value of that value
   $bi=array_unique($bi);
   //if it is 0 then exception throws or if the array has only 1 unique value then exception throws
   if($b==0 || sizeof($bi)==1)
   {
    try 
    {
      //throws the exception
       throw new Exception('shouldnt be divided by zero or a power of 2');
    }
       //catches the exception
    catch (Exception $e) 
    {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
   }
   else
   {
    //displays the value if no exception occurs
    echo $a/$b."\n";
   }
}
$msg="enter divident:";
echo $msg;
$a = trim(fgets(STDIN, 1024));
$msg="enter divisor:";
echo $msg;
$b = trim(fgets(STDIN, 1024));
check($a,$b);

   
?>