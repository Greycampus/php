<?php

   //declaring constant
   define("company", 'GreyCampus');
   //calling const1() function
   const1();
   function const1()
   {
	   echo "enter name:";
	   $name = trim(fgets(STDIN, 1024));
	   echo "enter id:";
	   $id = trim(fgets(STDIN, 1024));
	   //shows error as the value of company is already defined as constant
	   define("company", 'Google');
	   echo "Name:".$name."\n";
	   echo "id:".$id."\n";
	   echo "company name:";
	   echo company;
   }

?>

