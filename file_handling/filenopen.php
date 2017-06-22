<?php

$myFile = "text.txt";
//splits the file in to array
$lines = file($myFile);
echo "Enter line number:";
//takes the value as line number
$l=trim(fgets(STDIN, 1024));
//as array starts with 0 index , the value will be decreased by 1
$li=$l-1; 
//counts the number of lines in the file
$no_of_lines = count(file($myFile)); 
//check whether the line exists or not
if($no_of_lines<$l)
	echo "line does not exist\n";
//displays if line exists 
else
	echo $lines[$li]; 

?>