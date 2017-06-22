<?php
#creating custom exception by inheriting the Exception class
echo "enter divident:";
$inp1 = trim(fgets(STDIN, 1024));
echo "enter divisor:";
$inp2 = trim(fgets(STDIN, 1024));
checknum($inp1,$inp2);
function checknum($inp1,$inp2)
{

   $b=decbin($inp2-1);
   $b=str_split($b,1);
   $b=array_unique($b);
   if($inp2==0 || sizeof($b)==1)
   {try 
    {
       throw new Exception('shouldnt be divided by zero or a power of 2');}
       catch (Exception $e) 
    {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
   }
   else
   {
    echo $inp1/$inp2."\n";
   }
}
   
       
     
    


?>