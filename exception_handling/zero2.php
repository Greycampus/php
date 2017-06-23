<?php
#creating custom exception by inheriting the Exception class
echo "enter divident:";
$inp1 = trim(fgets(STDIN, 1024));
echo "enter divisor:";
$inp2 = trim(fgets(STDIN, 1024));
checknum($inp1,$inp2);
function checknum($inp1,$inp2)
{
   //converts the divisor-1 value in to binary format, as 2^n-1 contains only 1's in its binary value
   $b=decbin($inp2-1);
   //nows split the binary value
   $b=str_split($b,1);
   //extract the unique value of that value
   $b=array_unique($b);
   //if it is 0 then exception throws or if the array has only 1 unique value then exception throws
   if($inp2==0 || sizeof($b)==1)
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
    echo $inp1/$inp2."\n";
   }
}
   
?>
