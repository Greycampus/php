<?php

echo "enter the equation in the form of 1 2 1 if equation is x^2 + 2x + 1:";
//takes the values of coefficients of quadratic equation
$a=trim(fgets(STDIN, 1024));
$b=trim(fgets(STDIN, 1024));
$c=trim(fgets(STDIN, 1024));
//if b^2-4ac is less than 0, then roots are imaginary
//calculate b^2-4ac
$r=$b*$b-4*$a*$c;
	function quad($r)
	{
	 //if less than zero, throws exception
	 if($r<0)
	 	throw new Exception('roots are imaginary, so calculation stopped');
	}
	try
	{
		echo quad($r);
	}

	catch (Exception $e)
	 {
	 	//catches the exception and prints the error message
	    echo 'Caught exception: ',  $e->getMessage(), "\n";
	 }

?>
