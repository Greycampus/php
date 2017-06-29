<?php

$msg="enter the number of terms:";
echo $msg;
$n=trim(fgets(STDIN, 1024));
//multiples of two and three means, multiples of six
//all the values that are multiples of six will be stored in the array
for($i=0;$i<=$n;$i++)
{
   $k[$i]=$i*6;
}
$i=0;
 echo "Multiples of both two and three are:\n"; 
 //arrayobject is created             
$arrayobject = new ArrayObject($k);
//using iterators,generate the sequence of the array and dislpay them
for($iterator = $arrayobject->getIterator(); $iterator->valid(); $iterator->next()) 
 {
	echo $k[$i]."\n";
    $i++;
}

?>
