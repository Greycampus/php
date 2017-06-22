<?php

echo "enter the coefficients of quadratic equation:";
//takes coefficients of the quadratic equation
for($i=0;$i<3;$i++)
{
	$array[$i]=trim(fgets(STDIN, 1024));
}
//stores the size of the array
$l=sizeof($array);
//differentiating the equation-> power * coefficient, and store in a array
for($i=0;$i<3;$i++)
{
	$array1[$i]=($l-($i+1))*$array[$i];
}
echo "after differentiation the euation is:$array1[0]x $array1[1] \n";
//to find the value of x, for e.g: 2x-5=0 =>x=5/2
$sol=$array1[1]/$array1[0];
//if the coefficient of x^2 is >0 minima
if($array[0]>0)
 echo "the mininima value is $sol\n";
//if the coefficient of x^2 is <o minima
else
	echo "the maxima value is $sol\n";

?>