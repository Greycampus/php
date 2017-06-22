<?php

//takes a input string with mail id format
$string=trim(fgets(STDIN, 1024));
//pattern to extract @ and . symbol till three characters
$pattern = '/[a-z0-9_\-\+]+[a-z0-9.\-\+]+@[a-z0-9\-]+\.([a-z]{2,3})(?:\.[a-z]{2})?/i';
//pattern that matches the complete string and stores in to array
preg_match_all($pattern, $string, $matches);
//combines the index 0 to an array
$matches=implode(" ", $matches[0]);
//converts the string into array
$matches=explode(" ", $matches);
$m=sizeof($matches);
echo "after extraction:\n";
//displays the strings
for($i=0;$i<$m;$i++)
{
	echo $matches[$i];
	echo "\n";
}

?>
