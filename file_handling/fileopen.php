<?php
/*PHP program to open a text file and print all the data in it.

Output
Hi
hello world
welcome PHP

data in text.txt file
Hi
hello world
welcome PHP

*/
//reads the contents of the file
echo file_get_contents("text.txt")."\n"; 

?>