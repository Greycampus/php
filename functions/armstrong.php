<?php

echo "Enter a number:";
//calling arm function
arm();
//logic for armstrong
function arm()
{
	//takes input of a number to check whether it is armstrong
	$num=trim(fgets(STDIN, 1024));
	$l=strlen($num);
	$sum=0;
	//temp variable to store the real value
    $temp=$num;
    while($temp!=0)
	  {
	  	//to extract the last digit of the number
	    $rem=$temp%10;
	    //to make power of the digit adding the value to sum, which is calculate in the before iteration
	    $sum=$sum+$rem**$l;
	    //to extract the first n-1 digits as a number
	    $temp=$temp/10;
	  }
	  //if the sum value is equal to number, then armstrong
	  if($num==$sum)
	   echo "Armstrong number\n";
      else
  	   echo "not an armstrong number\n";
 }

?>