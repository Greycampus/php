<?php
/*
PHP program using loops of your choice and print as follows for a given input
input:
3
9
output:
----a----
---bbb---
--ccccc--
---bbb---
----a----

Input
enter number:3
enter width:9

Output
----a----
---bbb---
--ccccc--
---bbb---
----a----

*/
$msg="enter number:"; 
echo $msg; 
//number of alphabets
$a= fgets(STDIN, 1024); 
$a=trim($a);
$msg="enter width:";
echo $msg;
//length of a line
$n= fgets(STDIN, 1024); 
$n=trim($n);
//incrementing alphabets along with padding 
for ($i=0; $i < $a; $i++) 
{
 echo str_pad(str_repeat(chr(97+$i),(2*$i+1)),$n,'-',STR_PAD_BOTH); 
 //str_pad appends string to right with the specified character
 //str_repeat repeats the specific character for specified number of times 
 echo "\n";
}
//decrementing alphabets to 'a'
for ($i=1; $i < $a; $i++) 
{
 echo str_pad(str_repeat(chr(97+$a-$i-1),(2*($a-$i)-1)),$n,'-',STR_PAD_BOTH);
 echo "\n";
}

?>

