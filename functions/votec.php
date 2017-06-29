<?php

//enter votes in the form of string
$msg="Enter votes:";
echo $msg;
//takes the votes in the form of the string
$str=trim(fgets(STDIN, 1024));
//calls the function vote
vote($str);
function vote($str)
{	
    //counts the characters uniquely
	$strArray = count_chars($str,1);
	//initializing i value to 0
	$i=0;
	//stores the votes and number of votes in the form of multidimensional array
	foreach ($strArray as $key=>$value)
	   {
	   	//stores the number of votes
	     $array[$i][0]=$value;
	     //stores the characters(votes)
	     $array[$i][1]=chr($key);
	     //increment the i value
	     $i++;
	   }
	   //sort the array
	  rsort($array);
	  $i=0;
	  //displays the first value
	  if($array[0][0]!=$array[1][0])
	   {
	      echo $array[0][1]." wins with ".$array[0][0]." votes\n";
	   }
	  //to check if the tie occurs
	  else
	  {
	  	echo "its ties between ";
	  	echo $array[0][1];
		while($array[0][0]==$array[$i+1][0])
		 {
	      echo ",".$array[$i+1][1];
		  $i++;
		 }
	    echo " with ".$array[0][0]." votes\n";		
	   }
}
 
?>