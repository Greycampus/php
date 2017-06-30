<?php
/*PHP program to append two files in another file

Output
appended file data:
Hi
hello world
welcome PHP
hi hello
where are you
how are you

data in text.txt file
Hi
hello world
welcome PHP

dat in text1.txt file
hi hello
where are you
how are you
*/
 //converting the file into string
$file1 = file_get_contents("text.txt"); 
//converting the file into string
$file2 = file_get_contents("text1.txt"); 
// appending to files 
$file3=$file1.$file2;			
$file4= fopen("text2.txt","w");  
//writing the appended file in to another file      
fwrite($file4,$file3);  
//closing file                 
fclose($file4); 
echo "appended file data:\n";
 //display contents of new file
echo file_get_contents("text2.txt");  
echo "\n";

?>

