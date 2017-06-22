<?php
   
  function circle()
   {
      //global variable is declared and can be used any where in the program
      GLOBAL $pi; 
      //initializes the pi value
      $pi = 3.14;
   }
   //calls the circle function
   circle();
   echo "Enter radius of the circle:";
   //takes the radius of the circle
   $r = trim(fgets(STDIN, 1024));
   //calculates the area of the circle
   $val = $pi*$r*$r;
   //displays te value
   print "Area of the circle: $val\n";
   
?>
