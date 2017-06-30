<?php
/*PHP program to replace all the patterns like '[!*]' using regular expression

Input
enter the string:bhgd[!*[!*][!*]]hjiurhyh7t54r

Output
string before modification:bhgd[!*[!*][!*]]hjiurhyh7t54r
string after modification:bhgdhjiurhyh7t54r

*/
$msg="enter the string:";
echo $msg;
//takes a string along with sum nubers
$k=fgets(STDIN, 1024);
echo "string before modification:$k";
//replace '[!*]' with the null
$new_str = preg_replace('~[[][!][*][]]~', "", $k);
//to check if any other pattern like '[!*]' present in new_str, and replaces if present
for($i=0;$i<sizeof($k);$i++)
{
   $new_str = preg_replace('~[[][!][*][]]~', "", $new_str);
}
//displays the new_str
echo "string after modification:$new_str";

?>