<?php

$msg="enter initial term:";
echo $msg;
//takes initial value
$a=fgets(STDIN, 1024);
//trim function avoids the whitespaces
$a=trim($a);
//takes the ratio of the geometric progression
$msg="enter ratio in series:";
echo $msg;
$r=fgets(STDIN, 1024);
//trim function avoids the whitespaces
$r=trim($r);
//takes the input of a number to check
echo "enter number you want to check:";
$k=fgets(STDIN, 1024);
$k=trim($k);
if($k%$a==0 && $k==$a)
    echo "you just entered the initial term again,yes its in series";
elseif($k%$a==0 && $k%$r==0 && $k>$a)
{
	//dividing by a(initial term)
    $tmp = $k/$a; 
    while($tmp!=1 && $tmp >=$r)
     {
        //check for ratio exponential as in a.r^n
        $tmp=$tmp/$r;
      }
    if($tmp==1)
    {
        $msg="yes its in series\n";
        echo $msg;
    }
    else
    {
        $msg="not in series\n";
        echo $msg;
    }
}
else
{
 $msg="not in series\n";
 echo $msg;
}
?>