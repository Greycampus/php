<?php
/*PHP program to print type of data intialized
Output
integer
double
string*/
//initializes the a,b,c values
$a = 1;      //integer value
$b = 1.0;   //double value
$c = 'Grey Campus';   //string
//gettype function returns the type of the value
echo gettype($a), "\n"; //returns integer 
echo gettype($b), "\n"; //returns double
echo gettype($c), "\n"; //returns string

?>