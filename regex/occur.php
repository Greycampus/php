<?php
/*PHP program to find the total occurences of a symbol in string using reqular expressions

Input
enter the main string:bhghugcdb3454kschbnbvnng
Enter a symbol that you wish to find occurences:b

Output
b occured 5 times in bhghugcdb3454kschbnbvnng
*/
$msg= "enter the main string:";
echo $msg;
//takes the input of a string
$k=fgets(STDIN, 1024);
//counts the characters in the string
$i=strlen($k);
echo "Enter a symbol that you wish to find occurences:";
// takes the input of a character to count the occurences
$s=fgets(STDIN, 1024);
//replace the characters withy null
$new_str = preg_replace('~['.$s.']~', "", $k);
//counts the number of characters in the new string
$j=strlen($new_str);
//difference between old string and new string gives the count of the character
$ans=$i-$j;
echo "$s occured $ans times in $k";

?>