<?php

echo "Enter k value:";  
//number of alphabets
$k= trim(fgets(STDIN, 1024));  
echo "Enter s value:";
//length of a line
$s= trim(fgets(STDIN, 1024));  
for ($i=0; $i < $k; $i++) 
{
    echo str_pad(str_repeat(chr(65+$i),(2*$i+1)),$s,'-',STR_PAD_BOTH); 
    //str_pad appends string to right with the specified character
    //Str_repeat repeats the specific character for specified number of times 
    echo "\n";
}
for ($i=1; $i < $k; $i++) 
{
    echo str_pad(str_repeat(chr(65+$k-$i-1),(2*($k-$i)-1)),$s,'-',STR_PAD_BOTH);
    echo "\n";
}

?>
