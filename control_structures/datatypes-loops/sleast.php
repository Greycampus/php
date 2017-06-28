<?php

$msg= "enter number of students:";
echo $msg;
//takes the value of number of students
$stud=trim(fgets(STDIN, 1024));
$msg="enter student details:";
echo $msg;
//initializes the multidimensional array with student names and marks respectively
for($i=0;$i<$stud;$i++)
{
  $marks[$i][0]=trim(fgets(STDIN, 1024));
  $marks[$i][1]=trim(fgets(STDIN, 1024));
}
//to sort the marks of the students along with their names
for ($i = 0; $i < $stud; ++$i)
 {
  for ($j = $i + 1; $j < $stud; ++$j)
   {
    if ($marks[$i][1] > $marks[$j][1])
     {
      $a =  $marks[$i][1];
      $marks[$i][1] = $marks[$j][1];
      $marks[$j][1] = $a;              
      $a =  $marks[$i][0];
      $marks[$i][0] = $marks[$j][0];
      $marks[$j][0] = $a;
     }
   }
 }
$i=0;
//to leave the least marks as we want to display the second least
while($marks[$i][1]==$marks[$i+1][1])
{
  $i++;
}
$j=$i+1;
$k=0;
//stores the first name of second least
$names[$k]=$marks[$j][0];
//to store all the second least marks student names
while($marks[$j][1]==$marks[$j+1][1])
{
  $k++;
  $names[$k]=$marks[$j+1][0];
  $j++;
}
//sort the names according to alphabet
sort($names);
$s=count($names);
echo "students with second least marks:\n";
//displays the names of the students
for($i=0;$i<$s;$i++)
{
  echo $names[$i]."\n";
}

?>         