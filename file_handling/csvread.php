<?php

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