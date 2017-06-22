<?php

echo "enter the coefficients of quadratic equation:";

$str = trim(fgets(STDIN, 1024));
//converts string to array using space as delimiter
$array = explode(" ",$str);
//stores the size of the array
$l=sizeof($array);
//differentiating the equation-> degree * coefficient and decreasing the degree, then store in a array
//integrating the euation -> coefficient/(degree+1) and increasing degree by 1 and stores in the array, along with + and x characters
for($i=0;$i<$l;$i++)
{
	if($i!=$l-1)
	 $array1[$i]=($l-($i+1))*$array[$i];
	$array2[$i]=$array[$i]/($l-$i);

		if($i==$l-1)
		{
			$array2[$i]=$array2[$i].'x'.($l-($i));
		}
		elseif($i==$l-2 )
		{
			$array1[$i]=$array1[$i];
		}
		else
		{
		
			$array1[$i]=$array1[$i].'x'.($l-($i+2).' + ');			
			$array2[$i]=$array2[$i].'x'.($l-($i).' + ');
	    }
}
//converts array in to string
$value1=implode($array1);
//converts array in to string
$value2=implode($array2);
//displays the string  with +c, as constants exists
echo "converted string:$value1\n";
//displays the string  with +c, as constants exists
echo "converted string:$value2 +C\n";

?>
