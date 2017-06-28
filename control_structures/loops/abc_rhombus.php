<?php

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
    echo str_pad(str_repeat(chr(65+$i),(2*$i+1)),$n,'-',STR_PAD_BOTH); 
    //str_pad appends string to right with the specified character
    //str_repeat repeats the specific character for specified number of times 
    echo "\n";
}
//decrementing alphabets to 'a'
for ($i=1; $i < $a; $i++) 
{
    echo str_pad(str_repeat(chr(65+$a-$i-1),(2*($a-$i)-1)),$n,'-',STR_PAD_BOTH);
    echo "\n";
}

?>

