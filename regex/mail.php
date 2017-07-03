<?php
/*PHP program to extract the mail addresses in the given string using regular expression

Input
enter the raw data containing mail addresses:
bhavana@gmail.comrag@outlook.comteja@nic.in

Output
extracted email addresses are:
bhavana@gmail.com
rag@outlook.com
teja@nic.in
*/

$msg="enter the raw data containing mail addresses:\n";
echo $msg;
//takes a input string with mail id format
$data=fgets(STDIN, 1024);
//pattern to extract @ and . symbol till three characters
$m = '/[a-z0-9_\-\+]+[a-z0-9.\-\+]+@[a-z0-9\-]+\.([a-z]{2,3})(?:\.[a-z]{2})?/i';
//pattern that matches the complete string and stores in to the matches array and the number of matches is returned, that value is stored in l variable
$l=preg_match_all($m, $data, $matches);
echo "extracted email addresses are:\n";
//displays the strings
for($i=0;$i<$l;$i++)
{
 echo $matches[0][$i];
 echo "\n";
}

?>
