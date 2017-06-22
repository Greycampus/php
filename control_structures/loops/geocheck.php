<?php

echo "enter initial term:";
//takes initial value
$a=trim(fgets(STDIN, 1024));
//takes the ratio of the geometric progression
echo "enter ratio in series:";
$r=trim(fgets(STDIN, 1024));
//takes the input of a number to check
echo "enter number you want to check:";
$k=trim(fgets(STDIN, 1024));

if($k%$a==0 && $k==$a)
    echo "you just entered the initial term again,yes its in series";
elseif($k%$a==0 and $k%$r==0 and $k>$a)
{
	//dividing by a(initial term)
    $tmp = $k/$a; 
    while($tmp!=1 && $tmp >=$r)
     {
        //check for ratio exponential as in a.r^n
        $tmp=$tmp/$r;
      }
    if($tmp==1)
        echo "$k is in series\n";
    else
        echo "$k is not in serie\n";
}
else
 echo "$k is not in series\n";
?>