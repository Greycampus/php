<?php

echo "Enter number of students:";
//takes the value of number of students
$stud=trim(fgets(STDIN, 1024));
//initializes the array with number of students
$array=new SplFixedArray($stud);
echo "enter name and marks:\n";
//loop continues till the number of students given
//name and values are take in the form of string and then converts in to array using explode function
for($i=0;$i<$stud;$i++)
{
  $studd=trim(fgets(STDIN, 1024));
  $studd=explode(" ",$studd);
  //the complete array is taken in to an other array
  $array[$i]=$studd;
}

echo "Enter student for percentage:";
//takes input of the person to know the marks
$st=trim(fgets(STDIN, 1024));
//verifies all the names that are present in the array of array first index
for($i=0;$i<$stud;$i++)
{
	if($st==$array[$i][0])
	{
		//calculates the percentage of the person
		$sum=($array[$i][1]+$array[$i][2]+$array[$i][3])/3;
		echo $sum\n;
		break;
	}
}

?>