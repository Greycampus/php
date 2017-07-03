<?php
/*PHP program to open a text file and print the nth line in text file if nth line does not exist print 'no data'

Input
enter the line number:2
hello world

data in text.txt file
Hi
hello world
welcome PHP
*/
$myFile = "text.txt";
//splits the file in to array
$lines = file($myFile);
$msg= "enter the line number:";
echo $msg;
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