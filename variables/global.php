<?php
   /*PHP program to use pi value as global variable in your program to print the area of circle

   Input
   Enter radius of the circle:1

   Output
   Area of the circle with radius 1 is 3.14159
   */
function glob1()
{
  //global variable is declared and can be used any where in the program
  GLOBAL $pi; 
  //initializes the pi value
  $pi = 3.14159;
}
//calls the glob function
glob1();
$msg = "Enter radius of the circle:";
//displays the message stored in msg variable
echo $msg;
//takes the radius of the circle from the user
$r = fgets(STDIN, 1024);
 //trim function avoids the whitespaces
$r=(float)trim($r);
//calculates the area of the circle
$area = $pi*$r*$r;
//displays the value
print "Area of the circle with radius $r is $area\n";
   
?>