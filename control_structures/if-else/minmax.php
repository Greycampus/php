<?php
/*PHP program to find maxima or minima of a quadratic equation

Input 
enter the coefficients of quadratic equation:1 5 3

Output
after differentiation the euation is:2.00x+5.00 
the minima value is 2.5
*/
$msg="enter the coefficients of quadratic equation:";
echo $msg;
//takes coefficients of the quadratic equation
$equa=trim(fgets(STDIN, 1024));
$coef = explode(" ",$equa);
for ($i=0; $i < sizeof($coef) ; $i++) 
  $coef[$i]= number_format($coef[$i],2);
//stores the size of the array
$l=sizeof($coef);
//differentiating the equation-> power * coefficient, and store in a array
for($i=0;$i<$l;$i++)
  $defe[$i]=number_format((($l-($i+1))*$coef[$i]),2);
echo "after differentiation the euation is:$defe[0]x+$defe[1] \n";
//to find the value of x, for e.g: 2x-5=0 =>x=5/2
$mai=$defe[1]/$defe[0];
//if the coefficient of x^2 is >0 minima
if($coef[0]>0)
 echo "the minima value is $mai\n";
//if the coefficient of x^2 is <0 mixima
else
 echo "the maxima value is $mai\n";

?>