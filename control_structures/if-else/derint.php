<?php
/*PHP program to find derivative and integral of polynomial equation

Input
enter the coefficients:
1 5 6 4 3 2 5

Output
after differntion the equation is:6.00x5 + 25.00x4 + 24.00x3 + 12.00x2 + 6.00x1 + 2.00
after integration the equation is:0.14285714285714x7 + 0.83333333333333x6 + 1.2x5 + 1x4 + 1x3 + 15x1 +C

*/
$msg="enter the coefficients:\n";
echo $msg;
$equa= trim(fgets(STDIN, 1024));
//converts string to defe using space as delimiter
$coef= explode(" ",$equa);
for ($i=0; $i < sizeof($coef) ; $i++) 
  $coef[$i]= number_format($coef[$i],2);
//stores the size of the defe
$l=sizeof($coef);
//differentiating the equation-> degree * coefficient and decreasing the degree, then store in a defe
//integrating the euation -> coefficient/(degree+1) and increasing degree by 1 and stores in the defe, along with + and x characters
for($i=0;$i<$l;$i++)
{
 if($i!=$l-1)
 //number_format function formats the number, here it formats to 2 decimals
   $defe1[$i]=number_format((($l-($i+1))*$coef[$i]),2);
 $defe2[$i]=$coef[$i]/($l-$i);
 if($i==$l-1)
   $defe2[$i]=$defe2[$i].'x'.($l-($i));
 elseif($i==$l-2 )
   $defe1[$i]=$defe1[$i];
 else
  {
	$defe1[$i]=$defe1[$i].'x'.($l-($i+2).' + ');			
	$defe2[$i]=$defe2[$i].'x'.($l-($i).' + ');
  }
}
//converts defe in to string
$value1=implode($defe1);
//converts defe in to string
$value2=implode($defe2);
//displays the string
echo "after differntion the equation is:$value1\n";
//displays the string  with +c, as constants exists
echo "after integration the equation is:$value2 +C\n";

?>
