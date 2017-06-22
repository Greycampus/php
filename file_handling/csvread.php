<?php

//opens file 
$file = fopen("sample.csv","r");
//continues till the end of the file
while(! feof($file))
{
	//reads the csv file of second column 
    echo fgetcsv($file)[1];
    echo "\n";
}

fclose($file);
?>