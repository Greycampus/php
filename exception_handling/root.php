<?php
/*PHP program to use exception handling and prevent the calculation of roots of a quadratic equation if root are complex

Input
enter the equation in the form of 1 2 1 if equation is x^2 + 2x + 1:1 1 6

Output
Caught exception: roots are imaginary, so calculation stopped

*/
function quad($t,$k)
{
 //if less than zero, throws exception
 if($t<0)
  throw new Exception('roots are imaginary, so calculation stopped');
 else
 {
  //calculates the roots of the equation and display the roots
  echo "roots are:";
  echo (-1*$k[1]+ sqrt($t))/2*$k[0]."and";
  echo (-1*$k[1]- sqrt($t))/2*$k[0]."\n";
 }
}
$msg="enter the equation in the form of 1 2 1 if equation is x^2 + 2x + 1:";
echo $msg;
//takes the values of coefficients of quadratic equation
$k=trim(fgets(STDIN,1024));
$k=explode(" ",$k);
//if b^2-4ac is less than 0, then roots are imaginary
//calculate b^2-4ac
$t=$k[1]**2-4*$k[0]*$k[2];
try
{
 echo quad($t,$k);
}
catch (Exception $e)
{
 //catches the exception and prints the error message
 echo 'Caught exception: ',  $e->getMessage(), "\n";
}

?>
