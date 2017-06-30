<?php
/*PHP program to open a csv file and print only the second column in the file

Output
the data in the second column is:
 hi
 you
 cpp

data in the sample.csv file
hello, hi, how
are, you, php, 
python, cpp, ruby

*/
//opens file with read permission
$file = fopen("sample.csv","r");
echo "the data in the second column is:\n";
//continues till the end of the file
while(! feof($file))
	//reads the csv file of second column 
    echo fgetcsv($file)[1]."\n";
//close the file
fclose($file);
?>