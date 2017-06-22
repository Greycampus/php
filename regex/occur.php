<?php

echo "enter a string:";
//takes the input of a string
$str=trim(fgets(STDIN, 1024));
//counts the characters in the string
$i=strlen($str);
echo "Enter a symbol that you wish to find occurences:";
// takes the input of a character to count the occurences
$s=trim(fgets(STDIN, 1024));
//replace the characters withy null
$new_str = preg_replace('~['.$s.']~', "", $str);
//counts the number of characters in the new string
$j=strlen($new_str);
//difference between old string and new string gives the count of the character
$ans=$i-$j;
echo "$s occured $ans times in $str\n";

?>