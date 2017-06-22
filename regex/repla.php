<?php
echo "enter the string:";
//takes a string along with sum nubers
$str=trim(fgets(STDIN, 1024));
//calculates the size of the string
$s=sizeof($str);
//replace '[!*]' with the null
$new_str = preg_replace('~[[][!][*][]]~', "", $str);
//to check if any other pattern like '[!*]' present in new_str, and replaces if present
for($i=0;$i<$s;$i++)
{
   $new_str = preg_replace('~[[][!][*][]]~', "", $new_str);
}
//displays the new_str
echo $new_str;
?>